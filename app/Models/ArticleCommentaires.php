<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCommentaires extends Model
{
    use HasFactory;
    protected $fillable = [
        'content'
    ];
    public function user()
    {
        return $this->belongsTo(UserProfil::class);
    }
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}