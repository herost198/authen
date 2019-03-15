@extends('admin.layouts.glance')

@section('tittle')
     Danh mục Sản Phẩm
@endsection
@section('content')
    <h1>
        Sửa Sản phẩm:  {{$product->name}}
    </h1>
    <div class="row">
        <div class="form-three widget-shadow">
            <form class="form-horizontal" name="category" method="post" action="{{url('admin/shop/product/'.$product->id)}}">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên Sản phẩm</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name"  id="focusedinput" placeholder="Default Input" value="{{$product->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Thể loại</label>
                    <div class="col-sm-8" >
                        <select name="cat_id">
                            <option value="0"  <?php
                            if( $product->cat_id ==0)echo 'selected';
                                ?> > Không xác định</option>
                        @foreach($cats as $cat)
                                <option value="{{$cat->id}}"
                                <?php
                                        if($cat->id == $product->cat_id)echo 'selected';
                                    ?> >{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="slug" id="focusedinput" placeholder="Default Input" value="{{$product->slug}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="images" id="focusedinput" placeholder="Default Input" value="{{$product->images}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Price Core</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="priceCore" id="focusedinput"  value="{{$product->priceCore}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Price Sale</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="priceSale" id="focusedinput"  value="{{$product->priceSale}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Stock</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="stock" id="focusedinput"  value="{{$product->stock}}">

                    </div>
                </div>


                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả ngắn</label>
                    <div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{$product->intro}}</textarea></div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả</label>
                    <div class="col-sm-8"><textarea name="desc"  id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{$product->desc}}</textarea></div>
                </div>

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
