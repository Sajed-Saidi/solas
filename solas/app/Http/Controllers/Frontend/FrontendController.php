<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use App\Models\Content;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function index()
    {
        if (Content::where(['type' => 'activity', 'status' => 'published'])->get()->count() > 0) {
            $activity = Content::where(['type' => 'activity', 'status' => 'published'])->latest()->limit(1)->get()[0];
        } else {
            $activity = (object) [
                'title' => 'Understanding Autism Spectrum Disorder',
                'description' => 'An overview of Autism Spectrum Disorder (ASD) and its various characteristics.',
                'status' => 'published',
                'type' => 'activity',
                'images' => null,
            ];
        }

        if (Content::where(['type' => 'article', 'status' => 'published'])->get()->count() > 0) {
            $article = Content::where(['type' => 'article', 'status' => 'published'])->latest()->limit(1)->get()[0];
        } else {
            $article = (object) [
                'title' => 'Understanding Autism Spectrum Disorder',
                'description' => 'Autism Spectrum Disorder (ASD) is a complex developmental condition that involves persistent challenges in social interaction, communication, and behavior. This article provides an in-depth exploration of the characteristics of ASD, its varying manifestations, and the impact it has on individuals and their families. It also sheds light on the importance of early diagnosis, intervention, and the need for supportive environments to help individuals with ASD thrive.',
                'status' => 'published',
                'type' => 'article',
                'images' => null,
            ];
        }
        return view('frontend.index', [
            'article' => (object)$article,
            'activity' => (object) $activity,
        ]);
    }

    public function show(Content $content)
    {
        return view('frontend.contents.show', \compact('content'));
    }

    public function contactUs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'min:10'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Get the recipient email from settings
            $recipientEmail = Setting::first()->email;

            if (!$recipientEmail) {
                return response()->json([
                    'message' => 'Recipient email is not configured. Please contact support.'
                ], 500);
            }

            // Send the email
            Mail::to($recipientEmail)->send(new ContactUsMail(
                $request->name,
                $request->email,
                $request->subject,
                $request->message
            ));

            return response()->json([
                'message' => 'Message Sent Successfully!'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to send message.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function showAll(Request $request)
    {
        $type = $request->type ?? 'all';
        $search = $request->has('search') ? \trim($request->search) : null;

        $contents = Content::query()
            ->where('status', 'published')
            ->when($type != 'all' && $type != '', function ($query) use ($type) {
                return $query->where('type', $type);
            })
            ->when($search != null, function ($query) use ($search) {
                return $query
                    ->where('title', 'LIKE', '%' . $search . '%')
                    ->orWhere('description', 'LIKE', '%' . $search . '%')
                ;
            })
            ->paginate(6);

        return view('frontend.contents.showAll', compact('type', 'contents'));
    }
}
