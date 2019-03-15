@extends('admin.layouts.glance')

@section('tittle')
     Menu
@endsection
@section('content')
    <h1>
        Sửa Menu{{$menuitem->name}}
    </h1>
    <div class="row">
        <div class="form-three widget-shadow">
            <form class="form-horizontal" name="category" method="post" action="{{url('admin/menuitems/'.$menuitem->id)}}">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên Menu Item</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" id="focusedinput"  value="{{$menuitem->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Chọn kiểu Menu: </label>
                    <div class="col-sm-8" >
                        <select name="parent_id">
                            @foreach($types as $key => $value)
                                <option value="{{$key}}"
                                <?php
                                    if($key == $menuitem->parent_id)echo 'selected';
                                    ?> >{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Menu: </label>
                    <div class="col-sm-8" >
                        <select name="menu_id">
                            @foreach($menu as $mn)
                                <option value="{{$mn->id}}"
                                <?php
                                    if($mn->id == $menuitem->menu_id)echo 'selected';
                                    ?> >{{$mn->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="type" id="focusedinput" value="{{$menuitem->type}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">icon</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="icon" id="focusedinput" value="{{$menuitem->icon}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">link</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="link" id="focusedinput" value="{{$menuitem->link}}">
                    </div>
                </div>





                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
