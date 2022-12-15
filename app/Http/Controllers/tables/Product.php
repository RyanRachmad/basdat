<?php

namespace App\Http\Controllers\tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class Product extends Controller
{
  public function index()
  {
    $products = Products::paginate(10); 
    // dd($products);
    return view('content.tables.tables-product', compact(['products']));
  }
}
