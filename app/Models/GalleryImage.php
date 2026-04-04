<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable = ['gallery_id', 'filename_desktop', 'filename_mobile', 'folder_path', 'alt_text', 'order'];
    
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}