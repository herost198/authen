<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\AdminModel;
class AdminManagerController extends Controller
{
    //
    public function index()
    {
//        $items = ShopCategoryModel::all();
        $items = DB::table('admins')->paginate(10);
        $datas = array();
        $datas['admins'] = $items;
        return view('admin.content.users.index',$datas);
    }

    public function create()
    {
        $datas = array();
        return view('admin.content.users.submit',$datas);

    }

    public function edit($id)
    {
        $data = array();
        $item = AdminModel::find($id);
        $data['cat'] = $item;
        return view('admin.content.users.edit',$data);
    }

    public function delete($id)
    {
        $item = AdminModel::find($id);
        $item->delete();

        return redirect('/admin/users')->with('thongbao', 'da xoa thanh cong ');
    }

    public function store(Request $request)
    {
//        $input = $request->all();
//        echo '<br>';
//        print_r($input);
//        echo '<br>';
//        die;
        $validation = $request->validate(
            [
                'name'=>'required|max:100',
                'slug'=>'required',
                'images'=>'required'
            ],[
                'name.required'=>'please enter name',
                'slug.required'=>'please enter name Slug',
                'images.required'=>'please enter name image'
            ]
        );
        $item = new AdminModel();
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->images = $request->images;
        $item->intro = $request->intro;
        $item->desc= $request->desc;


        $item->save();

        return redirect('admin/users');

    }

    public function update(Request $request,$id)
    {
        $validation = $request->validate(
            [
                'name'=>'required|max:100',
                'slug'=>'required',
                'images'=>'required'
            ],[
                'name.required'=>'please enter name',
                'slug.required'=>'please enter name Slug',
                'images.required'=>'please enter name image'
            ]
        );
        $input= $request->all();
        $item = AdminModel::find($id);
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->images = $request->images;
        $item->intro = $request->intro;
        $item->desc= $request->desc;
        $item->save();

        return redirect('admin/users');
    }

    public function destroy($id)
    {
        $item = AdminModel::find($id);
        $item->delete();

        return redirect('/admin/users');
    }
}
