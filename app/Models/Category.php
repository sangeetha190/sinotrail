<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'status'
    ];
    public function product()
    {
        return $this->belongsTo(product::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
