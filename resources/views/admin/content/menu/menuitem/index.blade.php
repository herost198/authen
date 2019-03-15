@extends('admin.layouts.glance')

@section('tittle')
    Menu Item
@endsection
@section('content')
    <h1>
        Menu Item
    </h1>
    <div style="margin:20px 0">
        <a href="{{url('admin/menuitems/create')}}" class="btn btn-success">Add Menu Item</a>
    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Menu Items </h4>
            @if(session('thongbao'))
                <div class="alert alert-success">{{session('thongbao')}}<br></div>
            @endif
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id
                    <th>Tên</th>
                    <th>Type</th>
                    <th>link</th>
                    <th>icon</th>
                    <th>Menu</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($menuitems as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->link}}</td>
                        <td>{{$item->icon}}</td>
                        <td>
                            @foreach($menu as $mn)
                                @if($item->menu_id == $mn->id)
                                    {{$mn->name}}
                                    @break
                                @endif
                            @endforeach
                        </td>
                        <td>
                            <a href="{{url('admin/menuitems/'.$item->id.'/edit')}}" class="btn btn-danger">Edit</a>
                            <a href="{{url('admin/menuitems/'.$item->id.'/delete')}}" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $menuitems->links() }}
        </div>
    </div>
@endsection
