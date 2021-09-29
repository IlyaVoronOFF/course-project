<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->as('product_categories');
    }

    public function menu(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class,'categories_menu');
    }
}
