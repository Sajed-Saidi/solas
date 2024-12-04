<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    protected $fillable = [
        "title",
        "description",
        "status",
        "type",
    ];

    public function images()
    {
        return $this->hasMany(ContentImage::class);
    }
}
