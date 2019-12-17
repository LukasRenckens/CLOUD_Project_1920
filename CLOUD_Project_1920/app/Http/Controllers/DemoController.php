<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
     public function index()
    {
        return ("deze werkt");
    }
    
    public function userDemo()
    {
        return ("Ingelogd als user (userDemo)");
    }
    
     public function adminDemo()
    {
        return ("Ingelogd als admin (adminDemo)");
    }
}
