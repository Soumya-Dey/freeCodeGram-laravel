<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    // states what a user is authorized to do [if returns TRUE]
    // and what he/she is not authorized to do [if returns FALSE].
    // currently authenticated user gets passed in automatically
    public function delete(User $user, Post $post){
        return $user->id === $post->user_id;
    }
}
