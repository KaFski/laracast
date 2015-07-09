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
        $people = [
            'me'    =>  'Paweł',
            'you'   =>  'Johny',
            'sbd'   =>  'somebody'
        ];
        
        return view('page/about', compact('name'))->with('people', $people);
    }
}
