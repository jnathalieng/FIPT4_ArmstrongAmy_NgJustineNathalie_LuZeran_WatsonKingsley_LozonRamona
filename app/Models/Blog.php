<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'excerpt', 'featured_image', 'featured_image_alt'];
}
