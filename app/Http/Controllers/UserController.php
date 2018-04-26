<?php
/**
 * Created by PhpStorm.
 * User: Sherlock Holmes
 * Date: 4/25/2018
 * Time: 3:42 PM
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class UserController
{
    public function postSignUp(Request $request)
    {
        $name = $request['name'];
        $address = $request['address'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->name = $name;
        $user->address = $address;
        $user->password = $password;

        $user->save();

        return redirect()->back();
    }

    public function postSignIn(Request $request)
    {

    }
}