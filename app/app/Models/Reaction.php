<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(UserProfil::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function response()
    {
        return $this->belongsTo(Response::class);
    }
    public function type()
    {
        return $this->belongsTo(ReactionType::class);
    }
}
