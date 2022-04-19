@extends('logadmin.page')
@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{url('admin/DaftarRestoran')}}" class="float-right btn btn-success btn-sm">Tampilkan Semua</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                @if(isset($data))                  
                    <table class="table table-bordered">
                        <tr>
                            <th>Daerah</th>
                            <td>{{$data->daerah}}</td>
                        </tr>
                        <tr>
                            <th>Lokasi</th>
                            <td>{{$data->lokasi1}}</td>
                        </tr>
            
                    </table>
                    @endif
                </div>
            </div>
        </div>

    </div>

@endsection
