<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['slug', 'title', 'subtitle', 'description', 'folder_path'];
    
    public function images()
    {
        return $this->hasMany(GalleryImage::class);
    }
}