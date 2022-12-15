<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Transactions;
use App\Models\Payments;
use App\Models\Products;
use App\Models\Waktus;

class Analytics extends Controller
{
//   public function index()
//   {
//     return view('content.dashboard.dashboards-analytics');
//   }
  public function operations()
  {
    $jumlah_pembelian = Transactions::all()->sum('harga_total');
    $harga2022 = Transactions::join('dim_waktu', 'dim_waktu.sk_waktu', '=', 'fakta_pembelian.sk_waktu')->where('dim_waktu.tahun', '=', '2022')->sum('harga_total');
    $harga2021 = Transactions::join('dim_waktu', 'dim_waktu.sk_waktu', '=', 'fakta_pembelian.sk_waktu')->where('dim_waktu.tahun', '=', '2021')->sum('harga_total');
    $harga2020 = Transactions::join('dim_waktu', 'dim_waktu.sk_waktu', '=', 'fakta_pembelian.sk_waktu')->where('dim_waktu.tahun', '=', '2020')->sum('harga_total');
    $barang = Transactions::join('dim_waktu', 'dim_waktu.sk_waktu', '=', 'fakta_pembelian.sk_waktu')->sum('total_pembelian');
    $bni = Transactions::join('dim_payment', 'dim_payment.sk_payment', '=', 'fakta_pembelian.sk_payment')->where('dim_payment.id', '=', '1')->sum('harga_total');
    $mandiri = Transactions::join('dim_payment', 'dim_payment.sk_payment', '=', 'fakta_pembelian.sk_payment')->where('dim_payment.id', '=', '2')->sum('harga_total');
    $bri = Transactions::join('dim_payment', 'dim_payment.sk_payment', '=', 'fakta_pembelian.sk_payment')->where('dim_payment.id', '=', '3')->sum('harga_total');
    $bca = Transactions::join('dim_payment', 'dim_payment.sk_payment', '=', 'fakta_pembelian.sk_payment')->where('dim_payment.id', '=', '4')->sum('harga_total');
    $paypal = Transactions::join('dim_payment', 'dim_payment.sk_payment', '=', 'fakta_pembelian.sk_payment')->where('dim_payment.id', '=', '5')->sum('harga_total');
    $amazon = Transactions::join('dim_payment', 'dim_payment.sk_payment', '=', 'fakta_pembelian.sk_payment')->where('dim_payment.id', '=', '6')->sum('harga_total');
    $google = Transactions::join('dim_payment', 'dim_payment.sk_payment', '=', 'fakta_pembelian.sk_payment')->where('dim_payment.id', '=', '7')->sum('harga_total');
    $skrill = Transactions::join('dim_payment', 'dim_payment.sk_payment', '=', 'fakta_pembelian.sk_payment')->where('dim_payment.id', '=', '8')->sum('harga_total');
    $venmo = Transactions::join('dim_payment', 'dim_payment.sk_payment', '=', 'fakta_pembelian.sk_payment')->where('dim_payment.id', '=', '9')->sum('harga_total');
    $cod = Transactions::join('dim_payment', 'dim_payment.sk_payment', '=', 'fakta_pembelian.sk_payment')->where('dim_payment.id', '=', '10')->sum('harga_total');
    $tabel = Transactions::join('dim_customer','fakta_pembelian.sk_customer','=','dim_customer.sk_customer')
    ->selectRaw('dim_customer.name as nama,CAST(SUM(total_pembelian) as int) as total')->GroupBy("dim_customer.name")->orderByDesc('total')->limit(7)->get();
    return view('content.dashboard.dashboards-analytics', compact(['jumlah_pembelian','harga2022','harga2021','harga2020','barang','bni','mandiri','bri','bca','paypal','amazon','google','skrill','venmo','cod','tabel']));
  }
}
