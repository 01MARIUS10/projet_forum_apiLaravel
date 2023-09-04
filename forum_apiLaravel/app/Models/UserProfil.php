<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfil extends Model
{
    use HasFactory;
    protected $fillable = [
        'adress',
        'work',
        'school',
    ];
    public function user_auth()
    {
        return $this->belongsTo(UserAuth::class);
    }
    public function article_commentaire()
    {
        return $this->hasMany(ArticleCommentaires::class, 'user_id');
    }
    public function article()
    {
        return $this->hasMany(Article::class, 'user_id');
    }
    public function article_reaction()
    {
        return $this->hasMany(ArticleReaction::class, 'user_id');
    }
}
