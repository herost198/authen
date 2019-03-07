@extends('admin.layouts.glance')

@section('tittle')
    Trang Sản Phẩm
@endsection
@section('content')
    <h1>
       Trang Sản Phẩm
    </h1>
    <div style="margin:20px 0">
        <a href="{{url('admin/content/page/create')}}" class="btn btn-success">Add Page</a>
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
                    <th>Tên </th>
                    <th>Slug</th>
                    <th>Images</th>
                    <th>Tác giả</th>
                    <th>Lượt xem</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($pages as $data )
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->slug}}</td>
                        <td>{{$data->images}}</td>
                        <td>{{$data->author_id}}</td>
                        <td>{{$data->view}}</td>
                        <td>
                            <a href="{{url('admin/content/page/'.$data->id.'/edit')}}" class="btn btn-danger">Edit</a>
                            <a href="{{url('admin/content/page/'.$data->id.'/delete')}}" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $pages->links() }}
        </div>
    </div>
@endsection
