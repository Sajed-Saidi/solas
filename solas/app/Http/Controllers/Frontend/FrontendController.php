<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use App\Models\Content;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function index()
    {
        $activities = Content::where(['type' => 'activity', 'status' => 'published'])->latest()->limit(3)->get();
        if (\count($activities) == 0) {
            $activities = [
                [
                    'title' => 'Understanding Autism Spectrum Disorder',
                    'description' => 'An overview of Autism Spectrum Disorder (ASD) and its various characteristics.',
                    'status' => 'published',
                    'type' => 'activity',
                    'images' => null,
                ],
                [
                    'title' => 'How Solas Company Supports Families with Autism',
                    'description' => 'Learn about the services Solas Company provides for families affected by autism.',
                    'status' => 'published',
                    'type' => 'activity',
                    'images' => null,
                ],
                [
                    'title' => 'Therapeutic Approaches for Autism',
                    'description' => 'Exploring different therapeutic approaches used to support individuals with autism.',
                    'status' => 'published',
                    'type' => 'activity',
                    'images' => null,
                ],
            ];
        }

        $articles = Content::where(['type' => 'article', 'status' => 'published'])->latest()->limit(3)->get();
        if (\count($articles) == 0) {
            $articles = [
                [
                    'title' => 'Understanding Autism Spectrum Disorder',
                    'description' => 'An overview of Autism Spectrum Disorder (ASD) and its various characteristics.',
                    'status' => 'published',
                    'type' => 'article',
                    'images' => null,
                ],
                [
                    'title' => 'How Solas Company Supports Families with Autism',
                    'description' => 'Learn about the services Solas Company provides for families affected by autism.',
                    'status' => 'published',
                    'type' => 'article',
                    'images' => null,
                ],
                [
                    'title' => 'Therapeutic Approaches for Autism',
                    'description' => 'Exploring different therapeutic approaches used to support individuals with autism.',
                    'status' => 'published',
                    'type' => 'article',
                    'images' => null,
                ],
            ];
        }
        return view('frontend.index', \compact('activities', 'articles'));
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
            ->when($type != 'all' && $type != '', function ($query) use ($type) {
                return $query->where(['type' => $type, 'status' => 'published']);
            })
            ->when($search != null, function ($query) use ($search) {
                return $query->where('title', 'LIKE', '%' . $search . '%')
                    ->orWhere('description', 'LIKE', '%' . $search . '%');
            })
            ->paginate(6);

        return view('frontend.contents.showAll', compact('type', 'contents'));
    }
}
