<?php

Route::group([
                "prefix"=>"dashboard",
                //"middleware"=>["auth:admin"]
             ],
    function(){

    Route::get("/home","AdminHomeController@index")->name("admin.home");

});

// Admin Login And Logout Routes
Route::get("dashboard/login","AdminLoginController@showLoginForm")->name("admin.login");
Route::post("dashboard/login","AdminLoginController@authenticate")->name("admin.authenticate");
Route::get("dashboard/logout","AdminLoginController@logout")->name("admin.logout");

