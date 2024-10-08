<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Winner;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function home(){
        $winners = Winner::latest()->paginate(20);
        return view("admin.home", ["winners" => $winners]);
    }
    
    public function loginPage(){
        return view("admin.login");
    }
    public function login(){
        $form = request()->validate([
            "email" => ["email", "required"],
            "password" => "required"
        ]);

        $user = User::where(["email" => $form["email"]])->where(["password" => $form["password"]])->get();
        if(count($user) > 0) {
            $user = $user[0];
            if($user->password == $form["password"] && $user->email == $form["email"]) auth()->loginUsingId($user->id);
            return redirect("/admin/dashboard");
        }
        return back()->withInput()->withErrors(["email" => "incorrect email or password"]);
    }

    public function logout(){
        auth()->logout();
        return redirect("/admin");
        
    }

}
