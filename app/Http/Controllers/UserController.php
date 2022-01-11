<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();
        foreach($users as $user){
            $user->avatar = public_path('storage/avatars/'.$user->avatar);
        }

        return Inertia::render('Users/Index', [
            'users' => $users
        ]);
    }
}
