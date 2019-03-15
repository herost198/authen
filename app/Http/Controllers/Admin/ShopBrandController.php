<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShopBrandController extends Controller
{
    public function index()
    {
        $items = DB::table('shop_brands')->paginate(10);
        $datas = array();
        $datas['brands'] = $items;
        return view('admin.content.shop.brand.index',$datas);
    }

    public function create()
    {
        $datas = array();
        return view('admin.content.shop.brand.submit',$datas);

    }
}
