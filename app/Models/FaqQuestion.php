<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'question'];

    public function category()
    {
        return $this->belongsTo(FaqCategory::class, 'category_id', 'id');
    }

    public function questionAnswers()
    {
        return $this->hasMany(Answer::class, 'question_id', 'id');
    }
}
