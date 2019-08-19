<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

   
    public function show() {    
 
        $this->validate(request(),[
            'name' => 'required'
        ]);
        $name = request('name');
        echo $name;
    }
}
