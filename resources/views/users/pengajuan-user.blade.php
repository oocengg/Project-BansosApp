@extends('layouts.master-inner-user')

@section('container')
@auth
<main id="main">
    <section class="inner-page" style="padding: 120px 0;">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Pengajuan</h2>
                <p>Ajukan Permohonan Bantuan Sosial</p>
            </div>
            <p>
                Pendaftaran hanya bisa dilakukan sekali saja, Oleh karena itu pastikan anda mengisi data dengan
                jujur dan benar!
            </p>
            <hr>
            <form method="POST" action="{{ route('pengajuan.store') }}" enctype="multipart/form-data">
                @csrf
                <h5>Input Data Diri</h5>
                <div class="form-row" style="display: flex; padding-bottom: 20px">
                    <div class="form-group col-md-6" style="padding-right: 10px">
                        <label for="contoh1">Nama Lengkap</label>
                        <input type="text" name="Nama" class="form-control" id="contoh1"
                            placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group col-md-6" style="padding-right: 10px">
                        <label for="contoh2">NIK</label>
                        <input type="text" name="Nik" class="form-control" id="contoh2" placeholder="Masukkan NIK">
                    </div>
                </div>

                <div class="form-row" style="display: flex; padding-bottom: 20px">
                    <div class="form-group col-md-3" style="padding-right: 10px">
                        <label for="contoh1">Tempat Lahir</label>
                        <input type="text" name="Tempat_Lahir" class="form-control" id="contoh1"
                            placeholder="Masukkan Tempat Lahir">
                    </div>
                    <div class="form-group col-md-3" style="padding-right: 10px">
                        <label for="contoh2">Tanggal Lahir</label>
                        <input type="date" name="Tgl_Lahir" class="form-control" id="contoh2"
                            placeholder="Masukkan Tanggal Lahir">
                    </div>
                    <div class="form-group col-md-6" style="padding-right: 10px">
                        <label for="contoh2">No KK</label>
                        <input type="text" name="NoKK" class="form-control" id="contoh2" placeholder="Masukkan No KK">
                    </div>
                </div>

                <div class="form-row" style="display: flex; padding-bottom: 20px">
                    <div class="form-group col-md-3" style="padding-right: 10px">
                        <label for="inputState" style="padding-bottom: 10px;">Jenis Kelamin</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Jenis_Kelamin" id="inlineRadio1"
                                value="Pria">
                            <label class="form-check-label" for="inlineRadio1">Pria</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Jenis_Kelamin" id="inlineRadio2"
                                value="Wanita">
                            <label class="form-check-label" for="inlineRadio2">Wanita</label>
                        </div>
                    </div>
                    <div class="form-group col-md-3" style="padding-right: 10px">
                        <label for="contoh2">No HP</label>
                        <input type="text" name="NoHP" class="form-control" id="contoh2" placeholder="Masukkan No HP">
                    </div>
                    <div class="form-group col-md-3" style="padding-right: 10px">
                        <label for="contoh2">Pekerjaan</label>
                        <input type="text" name="Pekerjaan" class="form-control" id="contoh2"
                            placeholder="Masukkan Pekerjaan">
                    </div>
                    <div class="form-group col-md-3" style="padding-right: 10px">
                        <label for="contoh2">Penghasilan</label>
                        <input type="text" name="Penghasilan" class="form-control" id="contoh2"
                            placeholder="Masukkan Penghasilan">
                    </div>
                </div>

                <hr>

                <h5>Input Data Alamat Asal</h5>
                <div class="form-row" style="display: flex; padding-bottom: 20px">
                    <div class="form-group col-md-6" style="padding-right: 10px">
                        <label for="contoh1">Alamat Lengkap</label>
                        <input type="text" name="Alamat" class="form-control" id="contoh1"
                            placeholder="Masukkan Alamat Lengkap">
                    </div>
                    <div class="form-group col-md-3" style="padding-right: 10px">
                        <label for="contoh2">Provinsi</label>
                        <input type="text" name="Provinsi" class="form-control" id="contoh2"
                            placeholder="Masukkan Provinsi">
                    </div>
                    <div class="form-group col-md-3" style="padding-right: 10px">
                        <label for="contoh2">Kabupaten</label>
                        <input type="text" name="Kabupaten" class="form-control" id="contoh2"
                            placeholder="Masukkan Kabupaten">
                    </div>
                </div>

                <div class="form-row" style="display: flex; padding-bottom: 20px">
                    <div class="form-group col-md-3" style="padding-right: 10px">
                        <label for="contoh1">Kecamatan</label>
                        <input type="text" name="Kecamatan" class="form-control" id="contoh1"
                            placeholder="Masukkan Kecamatan">
                    </div>
                    <div class="form-group col-md-3" style="padding-right: 10px">
                        <label for="contoh2">Kelurahan</label>
                        <input type="text" name="Kelurahan" class="form-control" id="contoh2"
                            placeholder="Masukkan Kelurahan">
                    </div>
                    <div class="form-group col-md-3" style="padding-right: 10px">
                        <label for="contoh2">RT</label>
                        <input type="text" name="RT" class="form-control" id="contoh2" placeholder="Masukkan RT">
                    </div>
                    <div class="form-group col-md-3" style="padding-right: 10px">
                        <label for="contoh2">RW</label>
                        <input type="text" name="RW" class="form-control" id="contoh2" placeholder="Masukkan RW">
                    </div>
                </div>

                <hr>

                <h5>Input Persyaratan Bansos</h5>
                <div class="table-responsive col-md-12">
                    <div class="form-group col-md-6" style="padding-right: 10px">
                        <label for="contoh2">Jenis Bansos</label>
                        <select class="form-select" name="Jenis_Bansos" aria-label="Default select example">
                            <option selected>Pilih Jenis Bansos</option>
                            <option value="1">Program Keluarga Harapan (PKH)</option>
                            <option value="2">Bantuan Pangan Non Tunai (BPNT)</option>
                            <option value="3">Bantuan Sosial Tunai (BST)</option>
                            <option value="4">Bantuan Iuran Jaminan Kesehatan Nasional Kartu Indonesia Sehat (PBIN)
                            </option>
                            <option value="5">Bantuan Subsidi Listrik</option>
                            <option value="6">Bantuan Program Indonesia Pintar (JIP)</option>
                        </select>
                    </div>

                    <br>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td style="border-style:none;">
                                    Input Foto KTP
                                </td>
                                <td style="border-style:none;">:</td>
                                <td style="border-style:none;">
                                    <label for="contohupload1">Pilih file yang ingin diupload</label>
                                    &nbsp
                                    <input type="file" name="fotoKtp" class="form-control-file" id="contohupload1">
                                    &nbsp
                                </td>
                            </tr>
                            <tr>
                                <td style="border-style:none;">
                                    Input Swafoto KTP
                                </td>
                                <td style="border-style:none;">:</td>
                                <td style="border-style:none;">
                                    <label for="contohupload1">Pilih file yang ingin diupload</label>
                                    &nbsp
                                    <input type="file" name="swaFoto" class="form-control-file" id="contohupload1">
                                    &nbsp
                                </td>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-style:none;">
                                    Input Foto Bukti Surat Keterangan Tidak Mampu
                                </td>
                                <td style="border-style:none;">:</td>
                                <td style="border-style:none;">
                                    <label for="contohupload1">Pilih file yang ingin diupload</label>
                                    &nbsp
                                    <input type="file" name="fotoSktm" class="form-control-file" id="contohupload1">
                                    &nbsp
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <hr>

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
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