@extends('admin.layouts.glance')

@section('tittle')
    Nội Dung Danh mục
@endsection
@section('content')
    <h1>
        nội dung Danh mục
    </h1>
    <div style="margin:20px 0">
        <a href="{{url('admin/content/category/create')}}" class="btn btn-success">Add Category</a>
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
                    <th>Images</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($cats as $data )
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->slug}}</td>
                        <td>{{$data->images}}</td>
                        <td>
                            <a href="{{url('admin/content/category/'.$data->id.'/edit')}}" class="btn btn-danger">Edit</a>
                            <a href="{{url('admin/content/category/'.$data->id.'/delete')}}" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $cats->links() }}
        </div>
    </div>
@endsection
