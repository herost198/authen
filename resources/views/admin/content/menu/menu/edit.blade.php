@extends('admin.layouts.glance')

@section('tittle')
     Menu
@endsection
@section('content')
    <h1>
        Sửa Menu{{$menu->name}}
    </h1>
    <div class="row">
        <div class="form-three widget-shadow">
            <form class="form-horizontal" name="category" method="post" action="{{url('admin/menu/'.$menu->id)}}">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên Menu</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" id="focusedinput" placeholder="Default Input" value="{{$menu->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="slug" id="focusedinput" value="{{$menu->slug}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Location</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="location" id="focusedinput" value="{{$menu->location}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="desc" id="focusedinput" value="{{$menu->desc}}">
                    </div>
                </div>





                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
