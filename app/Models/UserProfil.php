<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfil extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'adress',
        'work',
        'school',
    ];
    public function userAuth()
    {
        return $this->belongsTo(UserAuth::class);
    }
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
    public function chatSending()
    {
        return $this->hasMany(Chat::class, 'from_id');
    }
    public function chatReceived()
    {
        return $this->hasMany(Chat::class, 'to_id');
    }
    public function question()
    {
        return $this->hasMany(Question::class, 'user_id');
    }
    public function reaction()
    {
        return $this->hasMany(Reaction::class, 'user_id');
    }
    public function response()
    {
        return $this->hasMany(Response::class, 'user_id');
    }
}
