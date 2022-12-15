<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Waktus;


class Waktu extends Controller
{
  public function index()
  {
    $waktus = Waktus::paginate(10);
    // dd($waktus);
    return view('content.tables.tables-waktu', compact(['waktus']));
  }
}
