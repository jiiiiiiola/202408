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

}
