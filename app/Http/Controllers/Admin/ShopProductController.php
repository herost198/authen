<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\ShopProductModel;
use Illuminate\Support\Facades\DB;
use App\Model\Admin\ShopCategoryModel;
class ShopProductController extends Controller
{
    public function index()
    {
        $items = DB::table('shop_products')->paginate(3);
        $datas = array();
        $cats = ShopCategoryModel::all();
        $datas['cats'] = $cats;
        $datas['products'] = $items;

        return view('admin.content.shop.product.index',$datas);
    }

    public function create()
    {
        $datas = array();
        $cats = ShopCategoryModel::all();
        $datas['cats']= $cats;
        return view('admin.content.shop.product.submit',$datas);

    }

    public function edit($id)
    {
        $data = array();
        $item = ShopProductModel::find($id);
        $cat  = ShopCategoryModel::all();
        $data['product'] = $item;
        $data['cats']= $cat;
        return view('admin.content.shop.product.edit',$data);
    }

    public function delete($id)
    {
        $item = ShopProductModel::find($id);
        $item->delete();

        return redirect('/admin/shop/product')->with('thongbao', 'da xoa thanh cong ');
    }

    public function store(Request $request)
    {
        $item = new ShopProductModel();
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->images = $request->images;
        $item->intro = $request->intro;
        $item->desc= $request->desc;
        $item->cat_id = $request->cat_id;
        echo '<br>';
        print_r($item);
        echo '<br>';
        $item->save();

        return redirect('admin/shop/product');

    }

    public function update(Request $request,$id)
    {
        $input= $request->all();
        $item = ShopProductModel::find($id);
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->images = $request->images;
        $item->intro = $request->intro;
        $item->desc= $request->desc;
        $item->cat_id = $request->cat_id;
        $item->save();

        return redirect('admin/shop/product');
    }

    public function destroy($id)
    {
        $item = ShopProductModel::find($id);
        $item->delete();

        return redirect('/admin/shop/product');
    }
}


