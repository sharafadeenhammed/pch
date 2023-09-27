<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Claim;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Winners;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/winners', [Winners::class, "getWinners"]);

Route::get('/claim', function(){
    return view("pages.claim");
});

Route::post('/claim', [Claim::class, "store"]);

Route::prefix("/contact")->group( function () {
    Route::view("/" ,'pages.contact');
    Route::get('/{contact}', [Contact::class, "show"]);
    Route::post('/', [Contact::class, "add"]);
});

Route::prefix("/admin/root/user/pch/claims")->group(function(){
    Route::get("/", [Claim::class, "getClaims"] );

    Route::get("/{claim}", [Claim::class, "get"]);
    
    Route::delete("/{claim}", [Claim::class, "remove"]);

});




Route::get("/admin/root/user/pch/",[Admin::class, "home"]);

Route::prefix("/admin/root/user/pch/contacts")->group(function(){
    Route::get("/", [Contact::class, "getContacts"] );

    Route::get("/{contact}", [Contact::class, "get"]);
    
    Route::delete("/{contact}", [Contact::class, "remove"]);

});

Route::view("/admin/root/user/pch/add/winner", "admin.add_winner");

Route::prefix("/admin/root/user/pch/winners")->group(
    function (){
        Route::get('/{winner}', [Winners::class, "show"]);

        Route::put('/{winner}', [Winners::class, "update"]);
    
        Route::post('/', [Winners::class, "store"]);
    
        Route::delete('/{winner}', [Winners::class, "remove"] );
    
    }
);


