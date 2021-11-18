<?php

namespace App\Http\Controllers;
use App\Models\Personal_detail;
use Illuminate\Http\Request;

class RemoveController extends Controller
{
  public function index()
  {
    $tharray = Personal_detail::all();

    return view('remove',['records'=>$tharray]);
  }
}
