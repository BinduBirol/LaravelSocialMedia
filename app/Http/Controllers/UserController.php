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
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:users',
            'password' => 'required|max:4',
            'address' => 'required|min:3'
        ]);

        $name = $request['name'];
        $address = $request['address'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->name = $name;
        $user->address = $address;
        $user->password = $password;

        $user->save();

        Auth::login($user);

        return redirect()->route('admin');
    }

    public function getAdmin()
    {
        return view('home');
    }

    public function getSingIn(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['name' => $request['name'], 'password' => $request['password']])) {
            return redirect()->route('admin');
        }
        return redirect()->back();
    }

}