<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function  login() {
        return view("login");
    }



    public function postLogin(Request $request){
        $creds = $request ->except(("_token"));


        if(Auth::attempt($creds)){
//            dd(Auth::user());
            return redirect() ->route("my_posts");

        }
        else{
            abort(403);

        }
    }

    public function register() {
        return view('register');
    }


    public function  postRegister(RegisterRequest $request) {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect('user/login');
    }



    public function logOut(){
        Auth::logout();
        return redirect() -> route("login");

    }
}
