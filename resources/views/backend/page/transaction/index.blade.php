@extends('backend.layout.main')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
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
                        <th>Transaction Code</th>
                        <th>Travel Name</th>
                        <th>Name</th>
                        <th>No Phone</th>
                        <th>Email</th>
                        <th>Ticket Order</th>
                        <th>Date Booking</th>
                        <th>Sesi</th>
                        <th>Order Create At</th>
                        <th style="width: 150px !important;" class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($list->total() == 0)
                        <tr>
                            <td colspan="6" class="text-center fw-bold">No Data</td>
                        </tr>
                    @endif
                    @foreach($list as $row)
                        <tr>
                            <td>{{$row->code_transaction}}</td>
                            <td>{{$row->travel_name}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->no_phone}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->ticket_qty}}</td>
                            <td>{{date('D, d M Y',strtotime($row->date_booking))}}</td>
                            <td>{{$row->session_time}}</td>
                            <td>{{date('D, d M Y H:i:s',strtotime($row->created_at))}}</td>
                            <td class="text-right">
                                <a href="{{route('adminTransactionDelete', $row->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Transaction Code</th>
                        <th>Travel Name</th>
                        <th>Name</th>
                        <th>No Phone</th>
                        <th>Email</th>
                        <th>Ticket Order</th>
                        <th>Date Booking</th>
                        <th>Sesi</th>
                        <th>Order Create At</th>
                        <th style="width: 150px !important;" class="text-right">Action</th>
                    </tr>
                    </tfoot>
                </table>
                <div class="text-right">
                    {{ $list->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
