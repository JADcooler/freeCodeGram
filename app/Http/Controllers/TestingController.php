<?php

namespace App\Http\Controllers;
use App\Models\Personal_detail;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    function putdata()
    {
      // this is an array, because we used the same name with []
     //$tharray=Personal_detail::all();
     $tharray = Personal_detail::all();
      return view('test2',['tharray'=>$tharray]);
    }
}
