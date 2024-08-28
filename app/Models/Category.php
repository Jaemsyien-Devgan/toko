<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image','is_active'];

    // public static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($category) {
    //         if (empty($category->slug)) {
    //             $category->slug = Str::slug($category->name);
    //         }
    //     });
    // }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
