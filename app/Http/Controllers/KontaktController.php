<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 

// wir werden diese Funktion in die Seite web.php importieren und die Seite verwalten
class KontaktController extends Controller
{
    public function show() {
        return view('kontakt.kontakt'); 
    }

    public function send() {

        $data = request()->validate([
            'vorname' => 'required|min:3',
            'nachname' => 'required|min:3',
            'email' => 'required|email',
            'telefon' => 'required|min:5',
            'is_active' => 'required'
        ]);
        Mail::to('receipentemail@gmail.com')->send(new ContactUs($data));

       // dd('sent');

      return redirect()->back()->with('success','Die Nachricht wurde erfolgreich gesendet');
    }

    // public function receiveMessage()
    // {
    //     return view('kontakt.message');
    // }
}
