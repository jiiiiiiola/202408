<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{
    public function Login()
    {
        return 123;
    }
    public function Profile($id)
    {
        return $id;
    }

    public function SignUp()
{
    $binding = [
        'title' => '註冊',
        'sub_title' => '請註冊',
    ];
    return view( 'auth.signup' , $binding);

}

}


