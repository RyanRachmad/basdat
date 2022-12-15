@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Produk')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Tabel /</span> Produk
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table table-dark">
      <thead >
        <tr>
          <th>ID</th>
          <th>Nama Produk</th>
          <th>Nama Kategori</th>
          <th>Warna</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($products as $pr)
            <tr>
                <td>{{$pr->sk_produk}}</td>
                <td>{{$pr->productname}}</td>
                <td>{{$pr->nama_kategori}}</td>
                <td>{{$pr->color}}</td>
            </tr>
        @endforeach
      </tbody>
    </table><br>
      {{$products->links()}}
  </div>
</div>
<!--/ Basic Bootstrap Table -->

@endsection
