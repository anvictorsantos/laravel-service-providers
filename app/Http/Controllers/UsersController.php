<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function show()
    {
        $this->repository->createPost([
            'description' => 'Meu mais novo post'
        ]);

        return 'ok';
    }
}
