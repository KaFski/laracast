<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    
    public function contact() {
        return view('page/contact');
    }
    
    public function about() {
        
        $name = 'Paweł';
       
        
        return view('page/about')->with('name', $name);
    }
}
