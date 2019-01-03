<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

class HomeController extends Controller
{

  public function index()
  {

    Role::create([
      'name' => 'admin'
    ]);

    return view('welcome');
  }

}
