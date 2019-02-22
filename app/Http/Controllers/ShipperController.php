<?php

namespace App\Http\Controllers;

use App\Model\ShipperModel;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:shipper')->only('index');
    }
    public function index()
    {
        return view('shipper.dashboard');
    }

    public function create()
    {
        return view('shipper.auth.register');
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

        return redirect()->route('shipper.auth.login');
    }
}
