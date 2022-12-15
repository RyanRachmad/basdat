<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payments;


class Payment extends Controller
{
  public function index()
  {
    $payments = Payments::all(); 
    // dd($payments);
    return view('content.tables.tables-payment', compact(['payments']));
  }
}
