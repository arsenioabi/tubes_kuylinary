@extends('logadmin.page')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Restoran
                <a href="{{url('admin/DaftarRestoran')}}" class="float-right btn btn-success btn-sm">Tampilkan</a>
            </h6>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
            <p class="text-success">{{session('success')}}</p>
            @endif
            <div class="table-responsive">
                <form method="post", action="{{url('admin/DaftarPariwisata')}}">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Restoran</th>
                            <td>
                                <input name="namarest" type="text" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <th>Lokasi</th>
                            <td>
                                @if(isset($LokasiWisata))
                                <select name="lokasi" class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($LokasiRestoran as $l)
                                    <option value="{{ $l->nama_tempat }}">{{ $l->nama_tempat }}</option>
                                    @endforeach
                        
                                </select>
                                @endif
                            </td>
                        </tr>  
                        <tr>
                            <td colspan="2" class="text-center">
                                <input type="submit" class="btn btn-primary"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

