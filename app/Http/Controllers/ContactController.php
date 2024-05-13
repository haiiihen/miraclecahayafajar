<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact() {
        return view('webpage/contact');
    }

    public function sendMessage(Request $request) {
        $name = $request->name;
        $whatsapp = $request->whatsapp;
        $message = $request->message;

        // save data to database?

        return redirect()->to("https://wa.me/6282229920299?text=Hi Admin Vanilla Papua Indonesia, my name is $name and $message.");
    }
}

?>
