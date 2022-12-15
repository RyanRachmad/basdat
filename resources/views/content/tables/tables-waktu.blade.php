@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Waktu Transaksi')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Tabel /</span> Waktu
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table table-dark">
      <thead >
        <tr>
          <th>ID</th>
          <th>Hari</th>
          <th>Kuartal</th>
          <th>Bulan</th>
          <th>Tahun</th>
          <th>Tanggal</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($waktus as $wk)
            <tr>
                <td>{{$wk->sk_waktu}}</td>
                <td>{{$wk->hari}}</td>
                <td>{{$wk->kuartal}}</td>
                <td>{{$wk->bulan}}</td>
                <td>{{$wk->tahun}}</td>
                <td>{{$wk->tanggal}}</td>
            </tr>
        @endforeach
      </tbody>
    </table><br>
      {{$waktus->links()}}
  </div>
</div>
<!--/ Basic Bootstrap Table -->

@endsection
