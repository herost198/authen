@extends('admin.layouts.glance')

@section('tittle')
    Menu
@endsection
@section('content')
    <h1>
        Menu
    </h1>
    <div style="margin:20px 0">
        <a href="{{url('admin/menu/create')}}" class="btn btn-success">Add Menu</a>
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
                    <th>Slug</th>
                    <th>Location</th>
                    <th>Desc</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <th scope="row">{{$menu->id}}</th>
                        <td>{{$menu->name}}</td>
                        <td>{{$menu->slug}}</td>
                        <td>{{$menu->location}}</td>
                        <td>{{$menu->desc}}</td>
                        <td>
                            <a href="{{url('admin/menu/'.$menu->id.'/edit')}}" class="btn btn-danger">Edit</a>
                            <a href="{{url('admin/menu/'.$menu->id.'/delete')}}" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $menus->links() }}
        </div>
    </div>
@endsection
