<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transactions;

class Basic extends Controller
{
  public function index()
  {
    $transactions = Transactions::paginate(10);
    return view('content.tables.tables-basic', compact(['transactions']));
  }
}
