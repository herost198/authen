@extends('admin.layouts.glance')

@section('tittle')
    Trang
@endsection
@section('content')
    <h1>
        Thêm Trang
    </h1>
    <div class="row">

        @if (count($errors) >0 )
            <div class="alert alert-danger">
                @foreach ($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
            </div>
        @endif
        <div class="form-three widget-shadow">
            <form class="form-horizontal" name="product" method="post" action="{{url('admin/content/page')}}">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên Sản Phẩm <span style="color: red">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" value="{{ old('name') }}"  id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Thể loại</label>
                    <div class="col-sm-8">
                        <select  name="cat_id">
                            <option value="0" >Không xác định</option>
                            @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="slug"  value="{{ old('slug') }}" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="images"  value="{{ old('images') }}" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Author</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="author"  value="{{ old('author') }}" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>




                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
                    <div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả</label>
                    <div class="col-sm-8"><textarea name="desc"  id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
                </div>



                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
