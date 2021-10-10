<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    /**
     * Responds to requests to POST /test/profile
  */
  public function __construct()
  {

      $this->middleware('auth');
  }
    public function index()
    {
      return view('register');
    }
  /*
    public function postProfile() {
      echo 'profile method';
      return view('register');
   }*/
}
