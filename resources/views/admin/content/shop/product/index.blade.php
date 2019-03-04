@extends('admin.layouts.glance')


@section('content')
    <h1>
        Danh mục Sản Phẩm
    </h1>
    <div style="margin:20px 0">
        <a href="{{url('admin/shop/product/create')}}" class="btn btn-success">Add product</a>
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
                    <th>id</th>
                    <th>Tên</th>
                    <th>Slug</th>
                    <th>Images</th>
                    <th>Giá gốc</th>
                    <th>Giá Sale</th>
                    <th>Tồn kho</th>
                    <th>Thể loại</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($products as $data )
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->slug}}</td>
                        <td>{{$data->images}}</td>
                        <td>{{$data->priceCore}}</td>
                        <td>{{$data->priceSale}}</td>
                        <td>{{$data->stock}}</td>
                        <td>
                            @foreach($cats as $cat)
                                @if($cat->id == $data->cat_id)
                                    {{$cat->name}}
                                    @break
                                @endif
                            @endforeach
                            @if($data->cat_id == 0)Không xác định
                            @endif
                            {{--{{$data->category->name}}--}}
                        </td>

                        <td>
                            <a href="{{url('admin/shop/product/'.$data->id.'/edit')}}" class="btn btn-danger">Edit</a>
                            <a href="{{url('admin/shop/product/'.$data->id.'/delete')}}" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
@endsection