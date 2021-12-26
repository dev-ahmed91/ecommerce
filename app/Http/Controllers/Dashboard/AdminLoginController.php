<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminLoginRequest;


class AdminLoginController extends Controller
{


    public function showLoginForm()
    {
        return view('dashboard.auth.login');
    }

    //
    public function authenticate(AdminLoginRequest $request)
    {
        $remember = $request->has("remember_me") ? True : False;
        if(Auth::guard("admin")->attempt(['email'=>$request->email,'password'=>$request->password],$remember)){
            return redirect()->route('admin.home');
        }

        else
        {
            return redirect()->back()->with(["error"=>"Invalid Login Data"]);
        }

    }



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

}
