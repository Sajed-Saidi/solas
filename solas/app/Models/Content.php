<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Content extends Model
{
    use HasFactory;

    protected $table = 'contents';

    protected $fillable = [
        "title",
        "description",
        "status",
        "type",
        'images'
    ];

    protected $casts = [
        'images' => 'json',
    ];

    protected static function booted(): void
    {
        parent::boot();
        static::deleted(function (Content $content) {
            if ($content->images != null) {
                foreach ($content->images as $image) {
                    Storage::disk('public')->delete($image);
                }
            }
        });

        static::updating(function (Content $content) {
            if ($content->getOriginal('images') != null) {
                $imagesToDelete = array_diff($content->getOriginal('images'), $content->images);
                foreach ($imagesToDelete as $image) {
                    Storage::disk('public')->delete($image);
                }
            }
        });
    }
}
