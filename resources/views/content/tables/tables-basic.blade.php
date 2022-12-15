@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Tabel /</span> Pelanggan
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table table-dark">
      <thead >
        <tr>
          <th>ID Pelanggan</th>
          <th>ID Produk</th>
          <th>ID Pembayaran</th>
          <th>ID Waktu</th>
          <th>Ukuran Barang</th>
          <th>Jumlah Barang</th>
          <th>Harga Total</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($transactions as $tr)
            <tr>
                <td>{{$tr->sk_customer}}</td>
                <td>{{$tr->sk_produk}}</td>
                <td>{{$tr->sk_payment}}</td>
                <td>{{$tr->sk_waktu}}</td>
                <td>{{$tr->ukuran}}</td>
                <td>{{$tr->total_pembelian}}</td>
                <td>{{$tr->harga_total}}</td>
            </tr>
        @endforeach
      </tbody>
    </table><br>
      {{$transactions->links()}}
  </div>
</div>
<!--/ Basic Bootstrap Table -->

@endsection