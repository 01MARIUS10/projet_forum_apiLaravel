<?php

namespace App\Models;
// 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
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'categorie_id',
        'user_id',
        'image_id'
    ];

    public function user()
    {
        return $this->belongsTo(UserProfil::class, 'user_id');
    }
    public function categorie()
    {
        return $this->belongsTo(QuestionCategories::class);
    }
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
    public function reaction()
    {
        return $this->hasMany(Reaction::class, 'question_id');
    }
    public function response()
    {
        return $this->hasMany(Response::class, 'question_id');
    }
}
