<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'country_id', 'image_id', 'intro_desc', 'description', 'price', 'published'
    ];

    public function category()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
