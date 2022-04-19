@extends('logadmin.page')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Restoran
                    <a href="{{url('admin/DaftarRestoran')}}" class="float-right btn btn-success btn-sm">Tampilkan Semua</a>
                </h6>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" , action="{{ url('admin/DaftarRestoran/'.$data->id) }}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <tr>
                                <th>Daerah</th>
                                <td><input value="{{$data->daerah}}" name="daerah" type="text" class="form-control"/></td>
                            </tr>
                            <tr>
                                <th>Lokasi1</th>
                                <td>
                                @if(isset($Lokasi))
                                    <select name="lokasi" class="form-select" aria-label="Default select example">
                                        <option selected>{{ $data->lokasi }}</option>
                                        @foreach ($LokasiRestoran as $l)
                                        <option value="{{ $l->nama_restoran }}">{{ $l->nama_restoran }}</option>
                                        @endforeach
                                    </select>
                                @endif
                                </td>
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
    <!-- /.container-fluid -->
@endsection
