<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
  public function name()
  {
    return view('introduction.name', ['name' => '近藤悠哉']);
  }
}
