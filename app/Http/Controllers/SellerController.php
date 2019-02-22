<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SellerModel;
class SellerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:seller')->only('index');
    }
    public function index()
    {
        return view('seller.dashboard');
    }

    public function create()
    {
        return view('seller.auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required'
            ]
        );

        $adminModel = new SellerModel();
        $adminModel->name  = $request->name;
        $adminModel->email = $request->email;
        $adminModel->password = bcrypt($request->password);
        $adminModel->save();

        return redirect()->route('seller.auth.login');
    }
}
