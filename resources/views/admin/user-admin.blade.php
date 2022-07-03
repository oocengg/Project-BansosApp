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
                <h4 class="card-title">User</h4>
                <p class="card-description">
                    Berikut data User yang memiliki akun dalam BansosApp :
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="font-weight: bolder;">Nama</th>
                                <th style="font-weight: bolder;">Email</th>
                                <th style="font-weight: bolder;">Action</th>
                            </tr>
                        </thead>
                        @foreach ($userss as $us)
                        <tbody>
                            <tr>
                                <td>{{ $us->name }}</td>
                                <td>{{ $us->email }}</td>
                                <td>
                                    <form action="{{ route('admin.destroy', $us->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-rounded btn-fw">Delete This User</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection