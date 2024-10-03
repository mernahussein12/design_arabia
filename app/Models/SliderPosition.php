<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderPosition extends Model
{
    use HasFactory;

    protected $fillable = ['name_ar','name_en','image'];

    public function sliders()
    {
        return $this->hasMany(Slider::class, 'name_id', 'id');
    }
}
