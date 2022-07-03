@extends('layouts.master-admin')

@section('container')
<div class="container">
    <br>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <h4 class="card-title">Pengajuan Bantuan Sosial</h4>
                <p class="card-description">
                    Berikut data Bantuan Sosial yang harus ditanggapi oleh admin :
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="font-weight: bolder;">NIK</th>
                                <th style="font-weight: bolder;">Nama</th>
                                <th style="font-weight: bolder;">Jenis Bansos</th>
                                <th style="font-weight: bolder;">Action</th>
                            </tr>
                        </thead>
                        @foreach ($bansos as $bns)
                        <tbody>
                            <tr>
                                <td>{{ $bns->nik }}</td>
                                <td>{{ $bns->nama_lengkap }}</td>
                                <td>{{ $bns->nama_bansos }}</td>
                                <td style="display:flex">
                                    <a href="{{ route('admin.show', $bns->id) }}" style="text-decoration:none">
                                        <button type="button" class="btn btn-info btn-rounded btn-fw">Validasi</button>
                                    </a>
                                    &nbsp
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection