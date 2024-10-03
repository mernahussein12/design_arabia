<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name_ar','name_en', 'image', 'body','exp'];

    public function category()
    {
        return $this->belongsTo(CategoryService::class, 'category_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }


}
