@extends('admin.layouts.glance')

@section('tittle')
    Thể loại Danh mục Sản Phẩm
@endsection
@section('content')
    <h1>
        Sửa danh mục {{$cat->name}}
    </h1>
    <div class="row">
        <div class="form-three widget-shadow">
            <form class="form-horizontal" name="category" method="post" action="{{url('admin/shop/category/'.$cat->id)}}">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên Danh Mục</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" id="focusedinput" placeholder="Default Input" value="{{$cat->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="slug" id="focusedinput" placeholder="Default Input" value="{{$cat->slug}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="images" id="focusedinput" placeholder="Default Input" value="{{$cat->images}}">
                    </div>
                </div>



                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
                    <div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{$cat->intro}}</textarea></div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả</label>
                    <div class="col-sm-8"><textarea name="desc"  id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{$cat->desc}}</textarea></div>
                </div>

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
