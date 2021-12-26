<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminAuthRequest;
use Illuminate\Support\Facades\DB;


class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return DB::table("admins")->get();
        return view('dashboard.login');
    }

    //
    public function authenticate(AdminAuthRequest $request)
    {

        if(Auth::guard("admin")->attempt(['email' => $request->email,'password'=>$request->password,"admin_type_id"=>1])){
            return redirect()->route('admin.home');
            //return redirect(adminUrl('category/create'));
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
