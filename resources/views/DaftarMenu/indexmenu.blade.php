@extends('loguser.loguser')
@section('content')

    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th> Nama Makanan </th>
                              
                                <th>Lokasi</th>

                    
                                <th>Action</th>
                            </tr>
                            
                            
                        </tfoot>
                        <tbody>
                            @if ($data)
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $d->nama_makanan }}</td>
                                        <td>{{ $d->lokasi }}</td>
                                    
                                        <td>
                                            
                                            
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
