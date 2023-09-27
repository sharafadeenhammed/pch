<?php

namespace App\Http\Controllers;

use App\Models\Claim as ClaimModel;

use Illuminate\Http\Request;

class Claim extends Controller
{
    private static $email = "allahsegun@gmail.com";
    public function store(){
        $form = request()->validate([
            "name" => "required",
            "address" => "required",
            "state" => "required",
            "zipcode" => "required",
            "occupation" => "required",
            "income" => "required",
            "age" => "required",
            "gender" => "required",
            "phone" => "required",
        ]);
        // building messgae body...
        $body = "\nnew claim form\n\n\r";
        $body .= "name: " .$form["name"]. "\n\r";
        $body .= "address: " .$form["address"]. "\n\r";
        $body .= "state: " .$form["state"]. "\n\r";
        $body .= "zipcode: " .$form["zipcode"]. "\n\r";
        $body .= "occupation: " .$form["occupation"]. "\n\r";
        $body .= "income: " .$form["income"]. "\n\r";
        $body .= "age: " .$form["age"]. "\n\r";
        $body .= "gender: " .$form["gender"]. "\n\r";
        $body .= "phone: " .$form["phone"]. "\n\r";
        //delivering new contact form...
        // mail(self::$email, "new contact form", $body );

        ClaimModel::create($form);
        return  redirect("/")->with("message", "congratulations ".$form["name"]." 🎉, your claim is sucessfully received, we will get in touch soon.");
    }

    public function get(ClaimModel $claim){
        return view("admin.view_claim", ["claim" => $claim]);
    }

    public function remove(ClaimModel $claim){
        $claim->delete();
        return  redirect("/admin/root/user/pch/claims")->with("message", "claim info deleted sucesfully");
    }

    public function getClaims(){
        $claims = ClaimModel::latest()->paginate(20);
        return view("admin.claim", ["claims" => $claims]);
    }


}
