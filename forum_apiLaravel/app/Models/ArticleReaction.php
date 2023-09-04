<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleReaction extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(UserProfil::class);
    }
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    public function reaction()
    {
        return $this->belongsTo(ReactionType::class);
    }
}
