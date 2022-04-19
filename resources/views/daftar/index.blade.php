@extends('logadmin.layout')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tempat Pariwisata
                    <a href="{{ url('admin/tempatpariwisata/create') }}" class="float-right btn btn-success btn-sm">Tambah Tempat Pariwisata</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Restoran</th>
                        
                                <th>Deskripsi</th>
                              
                                <th>Lokasi</th>

                                <th>Action</th>
                            </tr>
                            
                            
                        </tfoot>
                        <tbody>
                            @if ($data)
                                @foreach ($data as $d)
                                    <tr>

                                        <td>{{ $d->nama_restoran }}</td>
                                        <td>{{ $d->deskripsi }}</td>
                                        <td>{{ $d->lokasi }}</td>
                                        <td>{{ $d->tarif }}</td>
                                        <td>
                                            <a href="{{ url('admin/daftar/' . $d->id) }}" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i></a>
                                            <a href="{{ url('admin/daftar/' . $d->id) . '/edit' }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Are you sure to delete this data?')"
                                                href="{{ url('admin/daftar/' . $d->id) . '/delete' }}"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
