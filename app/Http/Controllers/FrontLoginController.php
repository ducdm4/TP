<?php
namespace App\Http\Controllers;

use DB;
use Input;
use Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class FrontLoginController extends Controller
{

    public function ValidateUser()
    {
        if(Request::ajax()) {
            $username = Request::input('username');
            $password = Request::input('password');
            $isRember = Request::input('isRem');
            $user = User::where(array('email' => $username, 'password' => $password))->first();
            if ($user != null) {
                return 1;
            } else {
                return 0;
            }
        }
        //return view('front.home', ['user' => $user['firstname']]);
    }

}

?>