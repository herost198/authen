<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    //
    /*
     * Method này trả về View  đăng nhập cho admin
     * */
    public function login()
    {
        return view('admin.auth.login');
    }


    /*
     *  method này trả về View đăng nhập cho admin
     * lấy information from form have Method is Post
     * */
    public function loginAdmin(Request $request)
    {
        $this->validate($request, array(
            'email' => 'required|email',
            'password' => 'required|min:6'
        ));

        // Login
        if (Auth::guard('admin')->attempt(
            ['email' => $request->email, 'password' => $request->password], $request->remember
        )) {
            // nếu đăng nhập thành công sẽ redirect về view DashBoard của admin
            return redirect()->intended(route('admin.dashboard'));
        }
        // nếu đăng nhập thất bại thì quay trở về Form Login
        // với giá trị  của 2 ô Input  cũ là email và remember
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    /*
     * Method này dùng để đăng xuất
     * */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.auth.login');

    }
}
