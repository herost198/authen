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
        $validation = $request->validate(
            [
                'name'=>'required|max:100',
                'slug'=>'required',
                'images'=>'required',
                'priceCore'=>'required|numeric',
                'priceSale'=>'required|numeric',
                'stock'=>'required|numeric',
            ],[
                'name.required'=>'please enter name',
                'slug.required'=>'please enter name Slug',
                'images.required'=>'please enter name image',
                'priceCore.required'=>'please enter name Price Core',
                'priceSale.required'=>'please enter name Price Sale',
                'stock.required'=>'please enter name Stock',
            ]
        );
        $item = new ShopProductModel();
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->images = $request->images;
        $item->intro = $request->intro;
        $item->desc= $request->desc;
        $item->cat_id = $request->cat_id;
        $item->pricCore = $request->pricCore;
        $item->priceSale = $request->priceSale;
        $item->stock = $request->stock;

        $item->save();

        return redirect('admin/shop/product');

    }

    public function update(Request $request,$id)
    {
        $validation = $request->validate(
            [
                'name'=>'required|max:100',
                'slug'=>'required',
                'images'=>'required',
                'priceCore'=>'required|numeric',
                'priceSale'=>'required|numeric',
                'stock'=>'required|numeric',
            ],[
                'name.required'=>'please enter name',
                'slug.required'=>'please enter name Slug',
                'images.required'=>'please enter name image',
                'priceCore.required'=>'please enter name Price Core',
                'priceSale.required'=>'please enter name Price Sale',
                'stock.required'=>'please enter name Stock',

            ]
        );
        $input= $request->all();
        $item = ShopProductModel::find($id);
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->images = $request->images;
        $item->intro = $request->intro;
        $item->desc= $request->desc;
        $item->cat_id = $request->cat_id;
        $item->pricCore = $request->pricCore;
        $item->priceSale = $request->priceSale;
        $item->stock = $request->stock;
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


