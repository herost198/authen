@extends('admin.layouts.glance')
@section('title')
    Quản trị nhà vận chuyển
@endsection
@section('content')
    <h1>
      Nhà vận chuyển
    </h1>
    <div style="margin:20px 0">
        <a href="{{url('admin/shipper/create')}}" class="btn btn-success">Add shipper</a>
    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Tổng số: </h4>
            @if(session('thongbao'))
                <div class="alert alert-success">{{session('thongbao')}}<br></div>
            @endif
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($shippers as $shipper )
                    <tr>
                        <th scope="row">{{$shipper->id}}</th>
                        <td>{{$shipper->name}}</td>
                        <td>{{$shipper->email}}</td>
                        <td>
                            <a href="{{url('admin/shipper/'.$shipper->id.'/edit')}}" class="btn btn-danger">Edit</a>
                            <a href="{{url('admin/shipper/'.$shipper->id.'/delete')}}" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $shippers->links() }}
        </div>
    </div>
@endsection
