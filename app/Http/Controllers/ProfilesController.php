<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($userId)
    {
        //dd($userId);
        //dd(User::find($userId));

        $user = User::findOrFail($userId);

        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
