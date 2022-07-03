<?php

namespace App\Http\Controllers;

use App\Models\DataBansos;
use App\Models\User;
use App\Models\ValidasiData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.pengajuan-user',[
            "title" => "Pengajuan"
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
        if ($request->file('fotoKtp')) {
            $image_ktp = $request->file('fotoKtp')->store('images', 'public');
        } else {
            $image_ktp = 'defaultKTP.jpg';
        }

        if ($request->file('swaFoto')) {
            $image_swafoto = $request->file('swaFoto')->store('images', 'public');
        } else {
            $image_swafoto = 'defaultSwafoto.jpg';
        }

        if ($request->file('fotoSktm')) {
            $image_sktm = $request->file('fotoSktm')->store('images', 'public');
        } else {
            $image_sktm = 'defaultSktm.jpg';
        }

        //Melakukan validasi data
        $request->validate([
            'Nama' => 'required',
            'Nik' => 'required',
            'NoKK' => 'required',
            'Tempat_Lahir' => 'required',
            'Tgl_Lahir' => 'required',
            'Jenis_Kelamin' => 'required',
            'NoHP' => 'required',
            'Pekerjaan' => 'required',
            'Penghasilan' => 'required',
            'Alamat' => 'required',
            'Provinsi' => 'required',
            'Kabupaten' => 'required',
            'Kecamatan' => 'required',
            'Kelurahan' => 'required',
            'RT' => 'required',
            'RW' => 'required',
            'Jenis_Bansos' => 'required',
        ]);
        
        $databansos = new DataBansos();
        $databansos->nik = $request->get('Nik');
        $databansos->no_kk = $request->get('NoKK');
        $databansos->nama_lengkap = $request->get('Nama');
        $databansos->tempat_lahir = $request->get('Tempat_Lahir');
        $databansos->tanggal_lahir = $request->get('Tgl_Lahir');
        $databansos->jenis_kelamin = $request->get('Jenis_Kelamin');
        $databansos->alamat = $request->get('Alamat');
        $databansos->rt = $request->get('RT');
        $databansos->rw = $request->get('RW');
        $databansos->kelurahan = $request->get('Kelurahan');
        $databansos->kecamatan = $request->get('Kecamatan');
        $databansos->kabupaten = $request->get('Kabupaten');
        $databansos->provinsi = $request->get('Provinsi');
        $databansos->no_hp = $request->get('NoHP');
        $databansos->pekerjaan = $request->get('Pekerjaan');
        $databansos->penghasilan = $request->get('Penghasilan');
        $databansos->jenisbansos_id = $request->get('Jenis_Bansos');
        $databansos->foto_ktp = $image_ktp;
        $databansos->swafoto_ktp = $image_swafoto;
        $databansos->bukti_sktm = $image_sktm;
        $databansos->save();

        $update = User::with('databansos')->where('id', Auth::user()->id);
        $id_bansos = DataBansos::where('nik', $request->get('Nik'))->value('id');
        $update->update(['databansos_id' => $id_bansos]);

        $validasi = new ValidasiData();
        $validasi->databansos_id = $id_bansos;
        $validasi->proses = "Menunggu Validasi Admin.";
        $validasi->save();

        return redirect()->route('userHome')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
