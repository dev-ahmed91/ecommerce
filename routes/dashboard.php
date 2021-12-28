<?php

Route::group([
                "prefix"=>"dashboard",
                "middleware"=>["auth:admin"]
             ],
    function(){

    Route::get("/home","AdminHomeController@index")->name("admin.home");

    /* Setting Page*/
    Route::get("/setting","SettingController@index")->name("settings.index");

    /* Shipping Methods */
    Route::resource("shippingMethod","shippingMethodController");

});

// Admin Login And Logout Routes

Route::group(["prefix"=>"dashboard"], function(){

        Route::get("login","AdminLoginController@showLoginForm")->name("admin.login")->middleware('guest:admin');
        Route::post("login","AdminLoginController@authenticate")->name("admin.authenticate");
        Route::get("logout","AdminLoginController@logout")->name("admin.logout");

    });


