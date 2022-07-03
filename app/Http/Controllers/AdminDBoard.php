<?php

namespace App\Http\Controllers;

use App\Models\DataBansos;
use App\Models\User;
use App\Models\ValidasiData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminDBoard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $bansos = DB::table('databansos')
                        ->join('jenisbansos', 'databansos.jenisbansos_id', '=', 'jenisbansos.id')
                        ->join('users', 'databansos.id', '=', 'users.databansos_id')
                        ->join('validasi_data', 'databansos.id', '=', 'validasi_data.databansos_id')
                        ->select('databansos.nik','databansos.nama_lengkap','jenisbansos.nama_bansos', 'users.id')
                        ->where('validasi_data.proses', '=', 'Menunggu Validasi Admin.')
                        ->get();
        return view('admin.index-admin', [
                        'bansos' => $bansos,
                    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        $bansos = DataBansos::with('jenisbansos')->where('id', $users->databansos_id)->first();
        $validasi = ValidasiData::with('databansos')->where('databansos_id', $bansos->id)->first();
        return view('admin.detail-data', [
            'user' => $users, 
            'bansos' => $bansos,
            'validasi' => $validasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Validasi' => 'required',
        ]);


        $validasi_data = ValidasiData::where('databansos_id', $id)->first();

        $validasi_data->admin_id = Auth::user()->id;
        $validasi_data->proses = $request->get('Validasi');
        $validasi_data->save();
        
        return redirect()->route('admin.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('adminUser.index')
        -> with('success', 'Data Berhasil Dihapus');
    }
}