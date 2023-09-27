<?php

namespace App\Http\Controllers;

use App\Models\Winner;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function home(){
        $winners = Winner::latest()->paginate(20);
        return view("admin.home", ["winners" => $winners]);
    }

}
