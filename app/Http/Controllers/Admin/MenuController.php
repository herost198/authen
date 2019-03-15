<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\MenuModel;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    //
    //
    public function index()
    {
        $items = DB::table('menus')->paginate(3);
        $datas = array();
        $datas['menus'] = $items;
        return view('admin.content.menu.menu.index',$datas);
    }

    public function create()
    {
        $datas = array();
        return view('admin.content.menu.menu.submit',$datas);

    }

    public function edit($id)
    {
        $data = array();
        $item = MenuModel::find($id);
        $data['menu'] = $item;
        return view('admin.content.menu.menu.edit',$data);
    }

    public function delete($id)
    {
        $item = MenuModel::find($id);
        $item->delete();

        return redirect('/admin/menu')->with('thongbao', 'da xoa thanh cong ');
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

    public function update(Request $request,$id)
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
        $item = MenuModel::find($id);
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->location = $request->location;
        $item->desc= $request->desc;
        $item->save();

        return redirect('admin/menu');
    }

    public function destroy($id)
    {
        $item = MenuModel::find($id);
        $item->delete();

        return redirect('/admin/menu');
    }
}
