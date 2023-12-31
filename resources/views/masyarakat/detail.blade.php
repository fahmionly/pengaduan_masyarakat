@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detail Data Aduan</div>

                <div class="card-body">
                    <div class="row m-1">
                        <div class="col-md-4">
                            <form action="{{route('pengaduan.update', $pengaduan->id)}}" method="post">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="form-group mt-2">
                                    <label> Nama Pelapor </label>
                                    <input type="text" name="name" value="{{$pengaduan->name}}" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label> Username </label>
                                    <input type="text" name="username" value="{{$pengaduan->username}}" class="form-control">
                                </div>

                                <div class="form-group mt-2">
                                    <label> Nomor Induk Kependudukan </label>
                                    <input type="text" name="nik" value="{{$pengaduan->nik}}" maxlength="16" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label> Telephone </label>
                                    <input type="text" name="telp" value="{{$pengaduan->telp}}" maxlength="13" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label> Password </label>
                                    <input type="password" name="password" maxlength="16" class="form-control">
                                </div>

                                <input type="hidden" name="role" value="petugas">
                                
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-success"> Update </button>
                                    <a href="/pengaduan" class="btn btn-danger">Kembali</a>
                                </div>

                            </form>
                        </div>
                        <div class="col-md-8">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Nama Pelapor</th>
                                        <td>:</td>
                                        <td>{{$pengaduan->user->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Pengaduan</th>
                                        <td>:</td>
                                        <td>{{$pengaduan->tanggal_pengaduan}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>:</td>
                                        <td>
                                            @if($pengaduan->status === 'diajukan')
                                            <span class="text text-secondary">Sedang Diajukan</span>
                                            @elseif($pengaduan->status === 'diproses')
                                            <span class="text text-info">Sedang Diproses</span>
                                            @elseif($pengaduan->status === 'selesai')
                                            <span class="text text-success">Berhasil</span>
                                            @else
                                            <span class="text text-danger">Sedang Diajukan</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Foto</th>
                                        <td>:</td>
                                        <td>
                                            <img src="{{asset('/storage/images/dokumentasi/'.$pengaduan->foto)}}"
                                                alt="Dokumentasi" width="400px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Isi Pengaduan</th>
                                        <td>:</td>
                                        <td>{{$pengaduan->isi_pengaduan}}</td>
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
