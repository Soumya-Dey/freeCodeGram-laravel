<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Like;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body'
    ];

    // return if user alredy liked the post or not
    public function isLiked(User $user) {
        return $this->likes->contains('user_id', $user->id);
    }

    // reverse relation of user -> post
    public function user(){
        return $this->belongsTo(User::class);
    }

    // relation of post -> like
    public function likes(){
        return $this->hasMany(Like::class);
    }
}
