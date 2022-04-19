@extends('logadmin.layout')
@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{url('admin/daftar')}}" class="float-right btn btn-success btn-sm">Tampilkan Semua</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">                    
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Restoran</th>
                            <td>{{$data->nama_restoran}}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>{{$data->deskripsi}}</td>
                        </tr>
                        <tr>
                            <th>Lokasi</th>
                            <td>{{$data->lokasi}}</td>
                        </tr>
                        <tr>
                            <th>Tarif</th>
                            <td>{{$data->tarif}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
