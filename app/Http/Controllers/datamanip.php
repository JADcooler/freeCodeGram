<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datamanip extends Controller
{
    //
    public function someMethod(Request $request)
    {
       dd($request->all());  //to check all the datas dumped from the form
       //if your want to get single element,someName in this case
       //$someName = $request->someName;
    }
}
