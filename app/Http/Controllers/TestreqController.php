<?php

namespace App\Http\Controllers;
use App\Models\Personal_detail;

use Illuminate\Http\Request;

class TestreqController extends Controller
{

    function data(Request $request)
    {
      $okay=$request->input('selections');
        foreach($okay as $ok)
        {
          echo $ok."<br>";
          Personal_detail::where('regno', $ok)->delete();
        }

        echo "Successfully deleted selected records!";
    }
}
