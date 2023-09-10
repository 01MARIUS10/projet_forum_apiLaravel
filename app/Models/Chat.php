<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public function file()
    {
        $this->belongsTo(File::class, 'from_id');
    }
    public function from()
    {
        $this->belongsTo(UserProfil::class, 'from_id');
    }
    public function to()
    {
        $this->belongsTo(UserProfil::class, 'from_id');
    }
    public function image()
    {
        $this->belongsTo(Image::class, 'from_id');
    }
}
