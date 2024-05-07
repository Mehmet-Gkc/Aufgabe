<?php

namespace App\Http\Controllers;
use App\Models\Mitarbeiters;

// Um die Daten, die wir aus der Datenbank erhalten haben, auf der Seite zu verwenden, haben wir zunächst Modelle erstellt und das erstellte Modell in die Controller-Datei importiert. 
use Illuminate\Http\Request;

// wir werden diese Funktion in die Seite routes/web.php importieren und die Seite verwalten
class HomeController extends Controller
{
    public function index() {  
        // wir senden die Daten aus der Datenbank als key "mitarbeiters" an die Start-Seite
        $mitarbeiters = Mitarbeiters::all();
        return view('home.index', ['mitarbeiters' => $mitarbeiters ]);        
    }

    public function überuns() {
        // wir senden die Daten aus der Datenbank als key "mitarbeiters" an die Überuns-Seite
        $mitarbeiters = Mitarbeiters::all();
        return view('überuns.überuns' , ['mitarbeiters' => $mitarbeiters ]); 
    }
}
