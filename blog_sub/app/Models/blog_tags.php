<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_tags extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag_name',
        'tag_blog_id'
    ];
    
}
