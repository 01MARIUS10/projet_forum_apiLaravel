<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'content'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categorie()
    {
        return $this->belongsTo(ArticleCategories::class);
    }
    public function reaction()
    {
        return $this->hasMany(ArticleReaction::class, 'article_id');
    }
    public function commentaire()
    {
        return $this->hasMany(ArticleCommentaires::class, 'article_id');
    }
}
