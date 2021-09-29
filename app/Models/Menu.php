<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    public function category():BelongsToMany
    {
        return $this->belongsToMany(Category::class,'categories_menu');
    }
}
