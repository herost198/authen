<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SellerManagerController extends Controller
{
    public function index()
    {
        $items = DB::table('sellers')->paginate(3);
        $datas = array();
        $datas['sellers'] = $items;
        return view('admin.content.shop.seller.index',$datas);
    }

    public function create()
    {
        $datas = array();
        return view('admin.content.shop.seller.submit',$datas);

    }
}
