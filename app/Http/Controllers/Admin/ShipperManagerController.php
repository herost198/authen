<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShipperManagerController extends Controller
{
    public function index()
    {
        $items = DB::table('shippers')->paginate(3);
        $datas = array();
        $datas['shippers'] = $items;
        return view('admin.content.shop.shipper.index',$datas);
    }

    public function create()
    {
        $datas = array();
        return view('admin.content.shop.shipper.submit',$datas);

    }
}
