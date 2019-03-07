<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\ContentCategoryModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Admin\ContentPageModel;
class ContentPageController extends Controller
{
    //
    //
    public function index()
    {
        $items = DB::table('content_pages')->paginate(3);
        $datas = array();
        $cats = ContentCategoryModel::all();
        $datas['cats'] = $cats;
        $datas['pages'] = $items;

        return view('admin.content.content.page.index',$datas);
    }

    public function create()
    {
        $datas = array();
        $cats  = ContentCategoryModel::all();
        $pages = ContentPageModel::all();
        $datas['pages']= $pages;
        $datas['cats'] = $cats;
        return view('admin.content.content.page.submit',$datas);

    }

    public function edit($id)
    {
        $data = array();
        $item = ContentPageModel::find($id);
        $cat  = ContentCategoryModel::all();
        $data['product'] = $item;
        $data['cats']= $cat;
        return view('admin.content.content.page.edit',$data);
    }

    public function delete($id)
    {
        $item = ContentPageModel::find($id);
        $item->delete();

        return redirect('/admin/content/page')->with('thongbao', 'da xoa thanh cong ');
    }

    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'name'=>'required|max:100',
                'slug'=>'required',
                'images'=>'required',
                'author'=>'required|numeric'
            ],[
                'name.required'=>'please enter name',
                'slug.required'=>'please enter name Slug',
                'images.required'=>'please enter name image',
                'author.required'=>"enter id author",
                'author.numeric'=>"enter numeric",
            ]
        );
        $item = new ContentPageModel();
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->images = $request->images;
        $item->intro = $request->intro;
        $item->desc= $request->desc;
        $item->cat_id = $request->cat_id;
        $item->author_id = $request->author;

        $item->save();

        return redirect('admin/content/page');

    }

    public function update(Request $request,$id)
    {
        $validation = $request->validate(
            [
                'name'=>'required|max:100',
                'slug'=>'required',
                'images'=>'required',

            ],[
                'name.required'=>'please enter name',
                'slug.required'=>'please enter name Slug',
                'images.required'=>'please enter name image',


            ]
        );
        $input= $request->all();
        $item = ContentPageModel::find($id);
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->images = $request->images;
        $item->intro = $request->intro;
        $item->desc= $request->desc;
        $item->cat_id = $request->cat_id;
        $item->author_id = $request->author;
        $item->save();

        return redirect('admin/content/page');
    }

    public function destroy($id)
    {
        $item = ContentPageModel::find($id);
        $item->delete();

        return redirect('/admin/content/page');
    }
}
