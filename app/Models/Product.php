<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [

        'name',
        'slug',
        'description',
        'price',
        'discount_price',
        'stock',
        'category_id',
        'brand',
        'rating',
        'thumbnail',
        'sku',
        'status',
        'featured',
        'is_trending',
        'is_new',
    ];
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    // public function category()
    // {
    //     return $this->belongsTo(Category::class, 'category_id');
    // }
    // // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function feature()
    {
        return $this->hasMany(ProductFeature::class);
    }
}
