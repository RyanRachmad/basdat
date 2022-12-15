<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Transactions;
use App\Models\Products;
use App\Models\Waktus;

class Visualisasi extends Controller
{
  public function operations()
    {
      $negara = Transactions::join('dim_customer', 'dim_customer.sk_customer', '=', 'fakta_pembelian.sk_customer')
        ->select(Customers::raw('CAST(COUNT(country) as int) as negara'))->GroupBy(Customers::raw("dim_customer.country"))->pluck('negara');
        $ukuran = Transactions::select(Transactions::raw('CAST(COUNT(ukuran) as int) as ukuran'))->GroupBy(Transactions::raw("fakta_pembelian.ukuran"))->pluck('ukuran');    
        $warna = Transactions::join('dim_produk','fakta_pembelian.sk_produk','=','dim_produk.sk_produk')
        ->select(Transactions::raw('CAST(COUNT(color) as int) as warna'))->GroupBy(Products::raw("dim_produk.color"))->pluck('warna');
        $laki = Transactions::join('dim_customer', 'dim_customer.sk_customer', '=', 'fakta_pembelian.sk_customer')->where('dim_customer.gender', '=', 'Laki-Laki')->count('total_pembelian');
        $perempuan = Transactions::join('dim_customer', 'dim_customer.sk_customer', '=', 'fakta_pembelian.sk_customer')->where('dim_customer.gender', '=', 'Perempuan')->count('total_pembelian');
        $tahun2020 = Transactions::join('dim_waktu','fakta_pembelian.sk_waktu','=','dim_waktu.sk_waktu')
        ->select(Transactions::raw('CAST(COUNT(total_pembelian) as int) as unit_penjualan'))->where('dim_waktu.tahun', '=', '2020')->GroupBy(Waktus::raw("dim_waktu.bulan"))->pluck('unit_penjualan');
        $tahun2021 = Transactions::join('dim_waktu','fakta_pembelian.sk_waktu','=','dim_waktu.sk_waktu')
        ->select(Transactions::raw('CAST(COUNT(total_pembelian) as int) as unit_penjualan'))->where('dim_waktu.tahun', '=', '2021')->GroupBy(Waktus::raw("dim_waktu.bulan"))->pluck('unit_penjualan');
        $tahun2022 = Transactions::join('dim_waktu','fakta_pembelian.sk_waktu','=','dim_waktu.sk_waktu')
        ->select(Transactions::raw('CAST(COUNT(total_pembelian) as int) as unit_penjualan'))->where('dim_waktu.tahun', '=', '2022')->GroupBy(Waktus::raw("dim_waktu.bulan"))->pluck('unit_penjualan');
        $pelanggan = Customers::select(Customers::raw('CAST(COUNT(customerid) as int) as pelanggan'))->GroupBy(Customers::raw("dim_customer.country"))->pluck('pelanggan');    
        return view('content.dashboard.dashboards-visualize',compact(['negara','tahun2020','tahun2021','tahun2022','laki','perempuan','ukuran','warna','pelanggan']));
    }
}
