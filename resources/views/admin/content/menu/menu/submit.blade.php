@extends('admin.layouts.glance')

@section('tittle')
   Menu
@endsection
@section('content')
    <h1>
        Add new Menu
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
            <form class="form-horizontal" name="menu" method="post" action="{{url('admin/menu')}}">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên Menu</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="name" value="{{ old('name') }}" id="focusedinput" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Slug</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="slug" value="{{ old('slug') }}" id="focusedinput" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">location</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="location" value="{{ old('location') }}" id="focusedinput" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" name="desc" value="{{ old('desc') }}" id="focusedinput" >
                    </div>
                </div>



                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
