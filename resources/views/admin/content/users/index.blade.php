@extends('admin.layouts.glance')
@section('content')
    <h1>
        Admin
    </h1>
    <div style="margin:20px 0">
        <a href="{{url('admin/users/create')}}" class="btn btn-success">Add admin</a>
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
                @foreach($admins as $admin )
                    <tr>
                        <th scope="row">{{$admin->id}}</th>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email}}</td>
                        <td>
                            <a href="{{url('admin/users/'.$admin->id.'/edit')}}" class="btn btn-danger">Edit</a>
                            <a href="{{url('admin/users/'.$admin->id.'/delete')}}" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $admins->links() }}
        </div>
    </div>
@endsection