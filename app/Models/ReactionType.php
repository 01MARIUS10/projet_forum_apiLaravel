<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReactionType extends Model
{
    use HasFactory;
    protected $fillable = [
        'type'
    ];
    public function article_reaction()
    {
        return $this->hasOne(ArticleReaction::class);
    }
}
