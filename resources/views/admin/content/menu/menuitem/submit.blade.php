@extends('admin.layouts.glance')

@section('tittle')
   Menu Items
@endsection
@section('content')
    <h1>
        Add new Menu Items
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
            <form class="form-horizontal" name="menuitems" method="post" action="{{url('admin/menuitems')}}">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên Menu</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" value="{{ old('name') }}" id="focusedinput" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Chọn kiểu menu</label>
                    <div class="col-sm-8">
                        <select name="parent_id">
                            @foreach($types as $key=>$value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Thuộc Menu</label>
                    <div class="col-sm-8">
                        <select name="menu_id">
                            @foreach($menu as $mn)
                                <option value="{{$mn->id}}">{{$mn->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Type</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="type" value="{{ old('type') }}" id="focusedinput" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">link</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="link" value="{{ old('link') }}" id="focusedinput" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">icon</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="icon" value="{{ old('icon') }}" id="focusedinput" >
                    </div>
                </div>



                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
