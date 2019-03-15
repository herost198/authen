<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\ConfigModel;
class ConfigController extends Controller
{
    //
    public function index()
    {
        $datas = array();
        $data['config'] = ConfigModel::all();
        return view('admin.content.config.index',$datas);
    }

    public function create()
    {
        $datas = array();
        return view('admin.content.config.submit',$datas);

    }

    public function edit($id)
    {
        $data = array();
        $item = MenuModel::find($id);
        $data['menu'] = $item;
        return view('admin.content.menu.menu.edit',$data);
    }



    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'name'=>'required|max:100',
                'slug'=>'required',
                'location'=>'required|numeric'
            ],[
                'name.required'=>'please enter name',
                'slug.required'=>'please enter name Slug',
                'location.required'=>'please enter name image',
                'location.numeric'=>'please enter number '
            ]
        );
        $item = new MenuModel();
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->location = $request->location;
        $item->desc= $request->desc;


        $item->save();

        return redirect('admin/menu');

    }



}
