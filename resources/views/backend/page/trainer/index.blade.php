@extends('backend.layout.main')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
        <a href="{{route('adminTrainerAdd')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm px-3"><i
                class="fas fa-pen fa-sm text-white-50 mr-2"></i> Tambah Data</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{$title}}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Info Name</th>
                        <th>Photo</th>
                        <th>Instagram</th>
                        <th>Twitter</th>
                        <th>Facebook</th>
                        <th>Email</th>
                        <th style="width: 150px !important;" class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($trainer->total() == 0)
                        <tr>
                            <td colspan="8" class="text-center fw-bold">No Data</td>
                        </tr>
                    @endif
                    @foreach($trainer as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->info_name}}</td>
                            <td><img src="{{asset($row->photo)}}" alt="" height="30" class="rounded"></td>
                            <td>{{$row->instagram}}</td>
                            <td>{{$row->twitter}}</td>
                            <td>{{$row->facebook}}</td>
                            <td>{{$row->email}}</td>
                            <td class="text-right">
                                <a href="{{route('adminTrainerEdit', $row->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-pen"></i></a>
                                <a href="{{route('adminTrainerDelete', $row->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Info Name</th>
                        <th>Photo</th>
                        <th>Instagram</th>
                        <th>Twitter</th>
                        <th>Facebook</th>
                        <th>Email</th>
                        <th style="width: 150px !important;" class="text-right">Action</th>
                    </tr>
                    </tfoot>
                </table>
                <div class="text-right">
                    {{ $trainer->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
