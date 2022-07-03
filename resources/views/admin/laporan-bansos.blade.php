@extends('layouts.master-admin')

@section('container')
<div class="container">
    <br>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Laporan Bantuan Sosial</h4>
                <p class="card-description">
                    Berikut data Bantuan Sosial yang telah dilaksanakan oleh BansosApp :
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="font-weight: bolder;">NIK</th>
                                <th style="font-weight: bolder;">Nama</th>
                                <th style="font-weight: bolder;">Jenis Bansos</th>
                                <th style="font-weight: bolder;">Status Bansos</th>
                            </tr>
                        </thead>
                        @foreach ($laporan as $lpr)
                        <tbody>
                            <tr>
                                <td>{{ $lpr->nik }}</td>
                                <td>{{ $lpr->nama_lengkap }}</td>
                                <td>{{ $lpr->nama_bansos }}</td>
                                <td>{{ $lpr->proses }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                <br>
                <a href="{{ route('cetakPdf') }}">
                    <button type="button" class="btn btn-info btn-icon-text">
                        Print
                        <i class="mdi mdi-printer btn-icon-append"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection