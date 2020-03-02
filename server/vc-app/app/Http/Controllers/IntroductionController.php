<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class introductionController extends Controller
{
  public function name()
  {
    return view('Introduction.name', ['name' => '近藤悠哉']);
  }
}
