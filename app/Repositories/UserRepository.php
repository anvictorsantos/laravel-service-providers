<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function createPost($data)
    {
        $this->user->posts()->create($data);
    }
}
