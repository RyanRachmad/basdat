<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;


class Customer extends Controller
{
  public function index()
  {
    $customers = customers::paginate(10); 
    // dd($customers);
    return view('content.tables.tables-customer', compact(['customers']));
  }
}
