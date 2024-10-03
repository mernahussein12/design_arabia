<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = ['position_id', 'image', 'text_ar','text_en'];


    public function categories()
    {
        return $this->belongsTo(SliderPosition::class, 'position_id');
    }



}

