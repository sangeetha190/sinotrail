<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File; // for file deletion
class GalleryCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status'];


    // A category has many images
    public function images()
    {
        return $this->hasMany(GalleryImage::class, 'gallery_category_id');
    }
    // Automatically delete image files when the category is deleted
    protected static function booted()
    {
        static::deleting(function ($category) {
            foreach ($category->images as $image) {
                $filePath = public_path($image->image); // adjust if stored differently
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
            }
        });
    }
}
