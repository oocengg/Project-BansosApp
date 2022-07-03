<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ["except" => [ "index"] ]);
    }

    public function index(){
        $users = User::all();
        return view('users.home-user',[
            "title" => "Main Page",
            "users" => $users
        ]);
    }

    public function pengajuan(){
        return view('users.pengajuan-user',[
            "title" => "Pengajuan"
        ]);
    }

    public function profile(){
        $users = User::select('*')
                        ->first();
        return view('users.profile-user',[
            "title" => "Profile",
            'users' => $users,
        ]);
    }
}
