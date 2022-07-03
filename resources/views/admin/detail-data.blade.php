@extends('layouts.master-admin')

@section('container')
<div class="container">
    <br>
    <div class="row">
        <br>
        <div class="col-md-6 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Diri User</h4>
                    <p class="card-description">Berikut data diri lengkap User :</p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $bansos->nama_lengkap }}</td>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td>:</td>
                                    <td>{{ $bansos->nik }}</td>
                                </tr>
                                <tr>
                                    <td>No. KK</td>
                                    <td>:</td>
                                    <td>{{ $bansos->no_kk }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat & Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{ $bansos->tempat_lahir }} / {{ $bansos->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>{{ $bansos->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td>No. HP</td>
                                    <td>:</td>
                                    <td>{{ $bansos->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td>:</td>
                                    <td>{{ $bansos->pekerjaan }}</td>
                                </tr>
                                <tr>
                                    <td>Penghasilan</td>
                                    <td>:</td>
                                    <td>{{ $bansos->penghasilan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Alamat User</h4>
                    <p class="card-description">Berikut data alamat lengkap User :</p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Alamat Lengkap</td>
                                    <td>:</td>
                                    <td>{{ $bansos->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td>{{ $bansos->provinsi }}</td>
                                </tr>
                                <tr>
                                    <td>Kabupaten/Kota</td>
                                    <td>:</td>
                                    <td>{{ $bansos->kabupaten }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td>{{ $bansos->kecamatan }}</td>
                                </tr>
                                <tr>
                                    <td>Keluarahan/Desa</td>
                                    <td>:</td>
                                    <td>{{ $bansos->kelurahan }}</td>
                                </tr>
                                <tr>
                                    <td>RT/RW</td>
                                    <td>:</td>
                                    <td>{{ $bansos->rt }} / {{ $bansos->rw }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 grid-margin grid-margin-md-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Informasi Bansos</h4>
                    <p class="card-description">Berikut data informasi pengajuan bantuan sosial yang dilakukan oleh User
                        :</p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Jenis Bansos</td>
                                    <td>:</td>
                                    <td>{{ $bansos->jenisbansos->nama_bansos }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card" style="display: flex;">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Foto KTP</h4>
                                    <p class="card-description">Berikut data informasi pengajuan bantuan sosial yang
                                        dilakukan oleh User
                                        :
                                    </p>
                                    <img src="{{asset('storage/'.$bansos->foto_ktp)}}"
                                        style="width: 350px; height: 250px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card" style="display: flex;">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Swafoto KTP</h4>
                                    <p class="card-description">Berikut data informasi pengajuan bantuan sosial yang
                                        dilakukan oleh User
                                        :
                                    </p>

                                    <img src="{{asset('storage/'.$bansos->swafoto_ktp)}}"
                                        style="width: 350px; height: 250px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card" style="display: flex;">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Keterangan Tidak Mampu</h4>
                                    <p class="card-description">Berikut data informasi pengajuan bantuan sosial yang
                                        dilakukan oleh User
                                        :
                                    </p>

                                    <img src="{{asset('storage/'.$bansos->bukti_sktm)}}"
                                        style="width: 350px; height: 250px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container d-flex justify-content-center">
                        <form method="POST" action="{{ route('admin.update', $bansos->id) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div style="display: flex;">
                                <input type="radio" class="btn-check" name="Validasi" id="success-outlined"
                                    autocomplete="off"
                                    value="Data Berhasil Divalidasi, Bantuan Sosial akan segera disalurkan!" required>
                                <label class="btn btn-outline-success btn-rounded btn-fw"
                                    for="success-outlined">Validasi</label>
                                &nbsp

                                <input type="radio" class="btn-check" name="Validasi" id="danger-outlined"
                                    autocomplete="off"
                                    value="Data Gagal Divalidasi, Mohon maaf anda tidak dapat menerima Bantuan Sosial ini!"
                                    required>
                                <label class="btn btn-outline-danger btn-rounded btn-fw"
                                    for="danger-outlined">Reject</label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-rounded btn-fw"
                                style="width : 175px">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

@endsection