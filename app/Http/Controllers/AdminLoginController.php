<?php
namespace App\Http\Controllers;

use DB;
use Input;
use Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{

    public function Login(Request $request)
    {
        if ($request->isMethod('post')) {
            $username = $request->input('username');
            $password = $request->input('password');
            $admin = Admin::where('username', $username)->first();

            if ($admin != null) {
                if (hash('sha256', $request->input('password')) == $admin['password']) {
                    session(['userId' => $admin['id']]);
                    session(['username' => $admin['username']]);
                    return redirect('Admin/Manage');
                }
            }
            return redirect('Admin')->with(array(
                'loginMessage' => 'Sai tên đăng nhập hoặc mật khẩu',
                'username' => $username,
                'password' => $password
            ));
        }
    }

    public function Logout()
    {
        Session::forget('userId');
        Session::forget('username');
        return redirect('Admin');
    }
}

?>