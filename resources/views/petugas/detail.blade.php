@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detail Data Petugas</div>

                <div class="card-body">
                    <div class="row m-1">
                        <div class="col-md-4">
                            <form action="{{route('petugas.update', $user->id)}}" method="post">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="form-group mt-2">
                                    <label> Nama Lengkap </label>
                                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label> Username </label>
                                    <input type="text" name="username" value="{{$user->username}}" class="form-control">
                                </div>

                                <div class="form-group mt-2">
                                    <label> Nomor Induk Kependudukan </label>
                                    <input type="text" name="nik" value="{{$user->nik}}" maxlength="16" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label> Telephone </label>
                                    <input type="text" name="telp" value="{{$user->telp}}" maxlength="13" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label> Password </label>
                                    <input type="password" name="password" maxlength="16" class="form-control">
                                </div>

                                <input type="hidden" name="role" value="petugas">
                                
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-success"> Update </button>
                                    <a href="/petugas" class="btn btn-danger">Kembali</a>
                                </div>

                            </form>
                        </div>
                        <div class="col-md-8">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td>:</td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>:</td>
                                        <td>{{$user->username}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Induk Kependudukan</th>
                                        <td>:</td>
                                        <td>{{$user->nik}}</td>
                                    </tr>
                                    <tr>
                                        <th>Telephone</th>
                                        <td>:</td>
                                        <td>{{$user->telp}}</td>
                                    </tr>
                                    <tr>
                                        <th>Role</th>
                                        <td>:</td>
                                        <td>{{$user->role}}</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
