<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function OpenAboutPage(){
        $fName = "Vikram";
        $sName = "Kalsi";
        
        return view('pages.about', ["firstName" => $fName, "surname" => $sName]);

        //Below code also works (hardcoded)
        //return view('pages.about', ["firstName" => "Vikram", "surname" => "Kalsi"]);
    }
}
