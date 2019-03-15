@extends('admin.layouts.glance')
@section('title')
    Quản trị nhà cung cấp
@endsection
@section('content')
    <h1>
       Nhà Cung Cấp
    </h1>
    <div style="margin:20px 0">
        <a href="{{url('admin/seller/create')}}" class="btn btn-success">Add seller</a>
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
                @foreach($sellers as $seller )
                    <tr>
                        <th scope="row">{{$seller->id}}</th>
                        <td>{{$seller->name}}</td>
                        <td>{{$seller->email}}</td>
                        <td>
                            <a href="{{url('admin/seller/'.$seller->id.'/edit')}}" class="btn btn-danger">Edit</a>
                            <a href="{{url('admin/seller/'.$seller->id.'/delete')}}" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $sellers->links() }}
        </div>
    </div>
@endsection
