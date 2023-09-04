<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategories extends Model
{
    use HasFactory;
    protected $fillable = [
        'categorie'
    ];
    public function article()
    {
        return $this->hasMany(Article::class, 'categorie_id');
    }
}
