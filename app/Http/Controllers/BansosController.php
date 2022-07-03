<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index(){
        return view('index',[
            "title" => "Main Page"
        ]);
    }

    public function profile(){
        return view('profile',[
            "title" => "Profile Page"
        ]);
    }

    public function pengajuan(){
        return view('pengajuan',[
            "title" => "Pengajuan Page"
        ]);
    }
}
