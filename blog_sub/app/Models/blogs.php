<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_name',
        'blog_title',
        'blog_author_name',
        'blog_image',
        'blog_video',
        'blog_content',
        'blog_publish_date',
        'blog_category',
        'blog_meta_titles',
        'blog_status'
    ];
}
