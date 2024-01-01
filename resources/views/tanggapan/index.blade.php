@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Data Pangaduan</div>

                <div class="card-body">    
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <th>Nama Pelapor</th>
                                    <th>Tanggal Pengaduan</th>
                                    <th>Status Laporan</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($pengaduan as $row)
                                    <tr>
                                        <td>{{$row->user->name}}</td>
                                        <td>{{$row->tanggal_pengaduan}}</td>
                                        <td>
                                            @if($row->status === 'diajukan')
                                            <span class="text text-secondary">Belum Ditanggapi</span>
                                            @elseif($row->status === 'diproses')
                                            <span class="text text-info">Sedang Diproses</span>
                                            @elseif($row->status === 'selesai')
                                            <span class="text text-success">Berhasil</span>
                                            @else
                                            <span class="text text-danger">Ditolak</span>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{route('pengaduan.destroy', $row->id)}}" method="post">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                <a href="{{route('tanggapan.show',$row->id)}}" class="btn btn-info">Tanggapi</a>
                                                <!-- <a href="{{route('tanggapan.show',$row->id)}}" class="btn btn-info">
                                                    Tanggapi
                                                </a> -->
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah data akan hapus?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
