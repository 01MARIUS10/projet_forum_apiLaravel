<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;
    protected $fillable = [
        'content'
    ];
    public function user()
    {
        return $this->belongsTo(UserProfil::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
    public function reaction()
    {
        return $this->hasMany(Reaction::class);
    }
}
