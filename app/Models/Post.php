<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'image_path', 'user_id', 'is_published', 'key'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
