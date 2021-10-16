<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\acknowledgement;
use App\Models\Personal_detail;

//use Illuminate\Support\Facades\DB;
class SQLController extends Controller
{
    function index()
    {
      //return DB::select('select * from Users');
      return acknowledgement::all();
    }
}
