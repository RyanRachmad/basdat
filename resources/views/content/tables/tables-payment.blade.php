@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Pembayaran')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Tabel /</span> Payment
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table table-dark">
      <thead >
        <tr>
          <th>ID</th>
          <th>Tipe Pembayaran</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($payments as $p)
            <tr>
                <td>{{$p->sk_payment}}</td>
                <td>{{$p->payment_type}}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->

@endsection
