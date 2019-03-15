@extends('admin.layouts.glance')
@section('content')
    <h1>
        Khách hàng
    </h1>
    <div style="margin:20px 0">
        <a href="{{url('admin/customer/create')}}" class="btn btn-success">Add Customer</a>
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
                @foreach($customers as $customer )
                    <tr>
                        <th scope="row">{{$customer->id}}</th>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>
                            <a href="{{url('admin/customer/'.$customer->id.'/edit')}}" class="btn btn-danger">Edit</a>
                            <a href="{{url('admin/customer/'.$customer->id.'/delete')}}" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $customers->links() }}
        </div>
    </div>
@endsection