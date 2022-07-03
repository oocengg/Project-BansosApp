@extends('layouts.master-inner-user')

@section('container')
@auth
<main id="main">
    <section class="inner-page" style="padding: 120px 0;">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Profile</h2>
                <p>Hai {{ Auth::user()->name }}
                </p>
            </div>

            <div class="row justify-content-center align-items-center" data-aos="fade-up">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{asset('storage/'.$user->foto_user)}}"
                                alt="avatar" class="rounded-circle img-fluid thumb-post"  style="width: 150px; height: 150px; object-fit: cover;"> 
                            <h5 class="my-3">{{ Auth::user()->databansos->nama_lengkap }}</h5>
                            <p class="text-muted mb-1">{{ Auth::user()->databansos->pekerjaan }}</p>
                            <p class="text-muted mb-4">{{ Auth::user()->databansos->provinsi }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nama Lengkap</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->databansos->nama_lengkap }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tempat / Tanggal Lahir</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->databansos->tempat_lahir }} / {{ Auth::user()->databansos->tanggal_lahir }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->databansos->jenis_kelamin }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Alamat</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->databansos->alamat }}, {{ Auth::user()->databansos->kabupaten }}, {{ Auth::user()->databansos->provinsi }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">No HP</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->databansos->no_hp }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5>Informasi Pengajuan Bansos</h5>
                                <p>Berikut Informasi Bantuan Sosial yang telah anda ajukan :</p>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Nama Lengkap</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ Auth::user()->databansos->nama_lengkap }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Jenis Bansos</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            {{ $bansos->jenisbansos->nama_bansos }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Progress Bansos</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            {{ $validasi->proses }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center">
                        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card" style="display: flex;">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Foto KTP</h4>
                                    <p class="card-description">Berikut Foto KTP Anda : </p>

                                    <img src="{{asset('storage/'.$user->databansos->foto_ktp)}}" style="width: 350px; height: 250px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card" style="display: flex;">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Swafoto KTP</h4>
                                    <p class="card-description">Berikut Swafoto KTP Anda : </p>

                                    <img src="{{asset('storage/'.$user->databansos->swafoto_ktp)}}" style="width: 350px; height: 250px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 grid-margin grid-margin-md-0 stretch-card" style="display: flex;">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Keterangan Tidak Mampu</h4>
                                    <p class="card-description">Berikut Foto Bukti SKTM Anda : </p>

                                    <img src="{{asset('storage/'.$user->databansos->bukti_sktm)}}" style="width: 350px; height: 250px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </section>
</main>
@else
<main id="main">
    <section class="inner-page" style="padding: 120px 0;">
        <div class="container">
            <div class="section-title" style="text-align: center;" data-aos="fade-up">
                <h2 style="color: red;">OOPS!</h2>
                <p>Silahkan Login Terlebih Dahulu</p>
            </div>
        </div>
    </section>
</main>
@endauth

@endsection