<?php

namespace App\Http\Controllers;

use App\Models\Contact as ContactModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Contact extends Controller
{
    private static $email = "allahsegun@gmail.com";
    public function add(){
        $form = request()->validate([
            "name" => "required",
            "email" => ["email", "required"],
            "phone" => "required",
            "message" => "required"

        ]);

        // building messgae body...
        $body = "\nnew contact form\n\r";
        $body .= "name: " .$form["name"]. "\n\r";
        $body .= "name: " .$form["name"]. "\n\r";
        $body .= "email: " .$form["email"]. "\n\r";
        $body .= "phone: " .$form["phone"]. "\n\r";
        $body .= "messgae: " .$form["message"]. "\n\r";

        //delivering new contact form...
        // mail(self::$email, "new contact form", $body );

        ContactModel::create($form);
        return  redirect("/")->with("message", "hello ".$form["name"]." your message is sucessfully received, we will be in touch soon.");
    }

    public function get(ContactModel $contact){
        return view("admin.view_contact", ["contact" => $contact]);
    }

    public function remove(ContactModel $contact){
        $contact->delete();
        return  redirect("/admin/root/user/pch/contacts")->with("message", "Contact info deleted sucesfully");
    }

    public function getContacts(){
        $contacts = ContactModel::latest()->paginate(20);
        return view("admin.contact", ["contacts" => $contacts]);
    }
}
