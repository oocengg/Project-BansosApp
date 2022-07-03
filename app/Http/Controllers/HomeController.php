<?php

namespace App\Http\Controllers;

use App\Models\DataBansos;
use App\Models\User;
use App\Models\ValidasiData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $users = User::get();
        $bansoss = DataBansos::with('jenisbansos')->get();
        $validasii = ValidasiData::with('databansos')->get();

        return view('admin.index-admin', [
            'user' => $users, 
            'bansos' => $bansoss,
            'validasi' => $validasii
        ]);
    }

    public function userAdmin()
    {
        return view('admin.user-admin');
    }

    public function laporanBansos()
    {
        return view('admin.laporan-bansos');
    }

    public function detailData()
    {
        return view('admin.detail-data');
    }
}
