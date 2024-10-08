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



// admin area

Route::prefix("/admin/claims")->group(function(){
    Route::get("/", [Claim::class, "getClaims"] )->middleware("auth");

    Route::get("/{claim}", [Claim::class, "get"])->middleware("auth");
    
    Route::delete("/{claim}", [Claim::class, "remove"])->middleware("auth");

});




Route::get("/home",function(){
    return redirect("/admin/dashboard");
});


Route::prefix("/admin")->group( function(){
    Route::get("/",[Admin::class, "loginPage"])->name("login")->middleware("guest");
    Route::post("/login", [Admin::class, "login"]);
    Route::get("/logout", [Admin::class, "logout"])->middleware("auth");
    Route::get("/dashboard", [Admin::class, "home"])->middleware("auth");
});

Route::prefix("/admin/contacts")->group(function(){
    Route::get("/", [Contact::class, "getContacts"] )->middleware("auth");

    Route::get("/{contact}", [Contact::class, "get"])->middleware("auth");
    
    Route::delete("/{contact}", [Contact::class, "remove"])->middleware("auth");

});

// Route::view("/admin/winner", "admin.add_winner");

Route::prefix("/admin/winners")->group(
    function (){
        Route::view("/", "admin.add_winner")->middleware("auth");

        Route::get('/{winner}', [Winners::class, "show"])->middleware("auth");

        Route::put('/{winner}', [Winners::class, "update"])->middleware("auth");
    
        Route::post('/', [Winners::class, "store"])->middleware("auth");
    
        Route::delete('/{winner}', [Winners::class, "remove"] )->middleware("auth");
    
    }
);


