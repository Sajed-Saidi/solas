<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentImage extends Model
{
    protected $table = "content_images";

    protected $fillable = ['content_id', 'image_path'];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
