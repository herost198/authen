<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\AdminModel;
class adminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin')->only('index');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function create()
    {
        return view('admin.auth.register');
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

        $adminModel = new AdminModel();
        $adminModel->name  = $request->name;
        $adminModel->email = $request->email;
        $adminModel->password = bcrypt($request->password);
        $adminModel->save();

        return redirect()->route('admin.auth.login');
    }
}
