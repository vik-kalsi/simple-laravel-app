<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function OpenServicePage(){
        $services = [
            "Website Design",
            "E-commerce Solutions",
            "Web Hosting",
            "Custom Web Applications",
            "Business Strategy",
            "IT Consulting",
            "Cloud Services",
            "Network Security",
            "UI/UX Design",
            "Search Engine Optimization (SEO)"
        ];
        
        return view('pages.services', ["listOfServices" => $services]);
    }
}
