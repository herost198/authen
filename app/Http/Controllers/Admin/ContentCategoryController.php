<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Admin\ContentCategoryModel;
class ContentCategoryController extends Controller
{
    //

    public function index()
    {
//        $items = ShopCategoryModel::all();
        $items = DB::table('content_category')->paginate(3);
        $datas = array();
        $datas['cats'] = $items;
        return view('admin.content.content.category.index',$datas);
    }

    public function create()
    {
        $datas = array();
        return view('admin.content.content.category.submit',$datas);

    }

    public function edit($id)
    {
        $data = array();
        $item = ContentCategoryModel::find($id);
        $data['cat'] = $item;
        return view('admin.content.content.category.edit',$data);
    }

    public function delete($id)
    {
        $item = ContentCategoryModel::find($id);
        $item->delete();

        return redirect('/admin/content/category')->with('thongbao', 'da xoa thanh cong ');
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
        $item = new ContentCategoryModel();
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->images = $request->images;
        $item->intro = $request->intro;
        $item->desc= $request->desc;


        $item->save();

        return redirect('admin/content/category');

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
        $item = ContentCategoryModel::find($id);
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->images = $request->images;
        $item->intro = $request->intro;
        $item->desc= $request->desc;
        $item->save();

        return redirect('admin/content/category');
    }

    public function destroy($id)
    {
        $item = ContentCategoryModel::find($id);
        $item->delete();

        return redirect('/admin/content/category');
    }
}
