<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class CustomerManagerController extends Controller
{

    public function index()
    {
        $items = DB::table('users')->paginate(3);
        $datas = array();
        $datas['customers'] = $items;
        return view('admin.content.shop.customer.index',$datas);
    }

    public function create()
    {
        $datas = array();
        return view('admin.content.shop.customer.submit',$datas);

    }

}
