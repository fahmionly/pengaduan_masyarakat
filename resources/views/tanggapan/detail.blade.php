@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tanggapan Pengaduan Saudara /i <b>{{$pengaduan->user->name}} </b>
                </div>

                <div class="card-body">
                    <div class="row p-2">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th> Nama Pelapor </th>
                                        <td> : </td>
                                        <td> {{$pengaduan->user->name}} </td>
                                    </tr>
                                    <tr>
                                        <th> Tanggal Pengaduan </th>
                                        <td> : </td>
                                        <td> {{$pengaduan->tanggal_pengaduan}} </td>
                                    </tr>
                                    <tr>
                                        <th>Dokumentasi Aduan</th>
                                        <td> : </td>
                                        <td>
                                            <img src="{{asset('/storage/images/dokumentasi/'.$pengaduan->foto)}}"
                                                alt="Dokumentasi" width="200px">
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
                        <hr>
                        <div class="col-md-12">
                            <form action="{{route('tanggapan.store')}}" method="post">
                                @csrf
                                <div class="form-group m-2">
                                    <label>Petugas yang menanggapi</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->name}}">
                                    <input type="text" name="id_pengaduan" value="{{$pengaduan->id}}" hidden>
                                    <input type="text" name="id_user" value="{{Auth::user()->id}}" hidden>
                                </div>
                                <div class="form-group m-2">
                                    <label>Status Pengaduan</label>
                                    <!-- <select name="status" class="form-control"
                                        value="{{$pengaduan->status}}">{{$pengaduan->status}}
                                        <option value="diajukan">Diajukan</option>
                                        <option value="diproses">Diproses</option>
                                        <option value="selesai">Selesai</option>
                                        <option value="ditolak">Ditolak</option>
                                    </select> -->
                                </div>
                                <div class="form-group m-2">
                                    <textarea name="tanggapan" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group m-2">
                                    <button type="submit" class="btn btn-success"> Tanggapi </button>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
