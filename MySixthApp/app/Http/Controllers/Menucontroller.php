<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menucontroller extends Controller
{
    public function Menu(){
        return view("frontend.menu"); // dot notation is preferred
    }
}
