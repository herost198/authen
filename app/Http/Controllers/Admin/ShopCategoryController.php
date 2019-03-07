<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\ShopCategoryModel;
use Illuminate\Support\Facades\DB;

class ShopCategoryController extends Controller
{
    //
    public function index()
    {
//        $items = ShopCategoryModel::all();
        $items = DB::table('shop_category')->paginate(3);
        $datas = array();
        $datas['cats'] = $items;
        return view('admin.content.shop.category.index',$datas);
    }

    public function create()
    {
        $datas = array();
        return view('admin.content.shop.category.submit',$datas);

    }

    public function edit($id)
    {
        $data = array();
        $item = ShopCategoryModel::find($id);
        $data['cat'] = $item;
        return view('admin.content.shop.category.edit',$data);
    }

    public function delete($id)
    {
        $item = ShopCategoryModel::find($id);
        $item->delete();

        return redirect('/admin/shop/category')->with('thongbao', 'da xoa thanh cong ');
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
        $item = new ShopCategoryModel();
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->images = $request->images;
        $item->intro = $request->intro;
        $item->desc= $request->desc;


        $item->save();

        return redirect('admin/shop/category');

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
        $item = ShopCategoryModel::find($id);
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->images = $request->images;
        $item->intro = $request->intro;
        $item->desc= $request->desc;
        $item->save();

        return redirect('admin/shop/category');
    }

    public function destroy($id)
    {
        $item = ShopCategoryModel::find($id);
        $item->delete();

        return redirect('/admin/shop/category');
    }
}
