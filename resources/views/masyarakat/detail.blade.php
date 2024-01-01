@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detail Data Aduan</div>

                <div class="card-body">
                    <div class="row m-1">
                        
                        <div class="col-md-12">
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
                                <div class="form-group mt-2">
                                    <a href="/pengaduan" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
