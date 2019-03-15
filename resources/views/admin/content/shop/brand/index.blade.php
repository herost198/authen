@extends('admin.layouts.glance')

@section('content')
    <h1>
        Nhãn hiệu
    </h1>
    <div style="margin:20px 0">
        <a href="{{url('admin/brand/create')}}" class="btn btn-success">Add brand</a>
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
                    <th>Image</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($brands as $brand )
                    <tr>
                        <th scope="row">{{$brand->id}}</th>
                        <td>{{$brand->name}}</td>
                        <td>{{$brand->email}}</td>
                        <td>
                            <a href="{{url('admin/brand/'.$brand->id.'/edit')}}" class="btn btn-danger">Edit</a>
                            <a href="{{url('admin/brand/'.$brand->id.'/delete')}}" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $brands->links() }}
        </div>
    </div>
@endsection
