<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// wir werden diese Funktion in die Seite web.php importieren und die Seite verwalten
class KontaktController extends Controller
{
    public function kontakt() {
        return view('kontakt.kontakt'); 
    }
}
