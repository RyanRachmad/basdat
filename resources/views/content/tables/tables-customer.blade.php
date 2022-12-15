@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Pelanggan')

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
          <th>ID</th>
          <th>Nama Pelanggan</th>
          <th>Jenis Kelamin</th>
          <th>Negara</th>
          <th>Kota</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($customers as $cs)
            <tr>
                <td>{{$cs->sk_customer}}</td>
                <td>{{$cs->name}}</td>
                <td>{{$cs->gender}}</td>
                <td>{{$cs->country}}</td>
                <td>{{$cs->city}}</td>
            </tr>
        @endforeach
      </tbody>
    </table><br>
      {{$customers->links()}}
  </div>
</div>
<!--/ Basic Bootstrap Table -->

@endsection
