<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
  public function hello()
  {
    // viewファイルの中のmessage(フォルダ)の中のhello(ファイル)
    return view('message.hello', ['msg' => 'Hello View!']);
  }

  public function good()
  {
    return view('message.good');
  }
}
