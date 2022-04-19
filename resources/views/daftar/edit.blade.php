@extends('logadmin.layout')
@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Tempat Pariwisata
                    <a href="{{url('admin/daftar')}}" class="float-right btn btn-success btn-sm">Tampilkan Semua</a>
                </h6>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" , action="{{ url('admin/daftar/'.$data->id) }}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Restoran</th>
                                <td><input value="{{$data->nama_restoran}}" name="nama_restoran" type="text" class="form-control" /></td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>
                                    <textarea name="deskripsi" class="form-control">{{$data->deskripsi}}</textarea></td>
                            </tr>
                            <tr>
                                <th>Lokasi</th>
                                <td>
                                    <textarea name="lokasi" class="form-control">{{$data->lokasi}}</textarea></td>
                            </tr>
                            <tr>
                                <th>Tarif</th>
                                <td>
                                    <textarea name="tarif" class="form-control">{{$data->tarif}}</textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <input type="submit" class="btn btn-primary" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
