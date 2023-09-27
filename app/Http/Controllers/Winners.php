<?php

namespace App\Http\Controllers;

use App\Models\Winner as WinnersModel;
use Illuminate\Http\Request;

class winners extends Controller
{
    static public function getWinners(){
        $winners = WinnersModel::latest()->paginate(20);
        return view("pages.winners_list", ["winners" => $winners]);
    }

    static public function show(WinnersModel $winner){
        return view("admin.winner", ["winner" => $winner]);
    }

    static public function store(){
        $form = request()->validate([
            "name" => "required",
            "amount" => ["numeric", "required"],
            "delivery_status" => "required"
           ]);
        WinnersModel::create($form);
        return  redirect("/admin/root/user/pch/")->with("message", "winner listed sucesfully");
    }

    static public function remove(WinnersModel $winner){
       $winner->delete();
       return  redirect("/admin/root/user/pch/")->with("message", "winner deleted sucesfully");
    }

    static public function update(WinnersModel $winner){
       $form = request()->validate([
        "name" => "required",
        "amount" => ["numeric", "required"],
        "delivery_status" => "required"
       ]);
    
       $winner->name = $form["name"] ? $form["name"] :  $winner->name;
       $winner->amount = $form["amount"] ? $form["amount"] : $winner->amount;
       $winner->delivery_status = $form["delivery_status"] ? $form["delivery_status"] : $winner->delivery_status;

       // update winner...
       $winner->update();

       return  redirect("/admin/root/user/pch/")->with("message", "winner updated sucesfully");
    }
}
