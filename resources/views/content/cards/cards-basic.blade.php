@extends('layouts/contentNavbarLayout')

@section('title', 'Tampilan - Produk')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produk Uniqlo</span></h4>

<!-- Grid Card -->  
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/1.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">UT Kei Nishikori Lengan Pendek</h5>
        <p class="card-text">Sebuah t-shirt yang memiliki kekuatan untuk menyebarkan perdamaian. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/2.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">T-Shirt Waffle Lengan Panjang</h5>
        <p class="card-text">T-shirt Wanita dalam rajut waffle yang lebih lembut. Siluet relax yang cocok dengan berbagai bawahan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/3.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Jaket Parka Lapis Jersey Lembut</h5>
        <p class="card-text">Jaket Pria berbahan crisp dan lembut dan lapisan yang terasa nyaman. Parka fungsional untuk dipakai sehari-hari.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/4.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Jaket Parka Katun Blend (wanita)</h5>
        <p class="card-text">Jaket hoodie wanita dengan kerah tiga dimensi untuk tampilan modern.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/5.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Jaket Parka Katun Blend (Pria)</h5>
        <p class="card-text">Jaket hoodie fungsional dan praktis untuk Pria, dengan desain serbaguna untuk dipakai kasual sehari-hari.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/6.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Jaket Parka Saku UV Protection</h5>
        <p class="card-text">Jaket hoodie wanita dari bahan yang ringan, dengan pouch penyimpan agar dapat dibawa ke mana saja. Menghalau sinar UV (UPF40), cocok untuk kasual maupun berolahraga.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/7.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Celana Smart Ankle (Glencheck)</h5>
        <p class="card-text">Celana panjang elegan dan stylish untuk Pria dari bahan yang lentur untuk kenyamanan Anda.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/8.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Jeans Crop Loose Damaged</h5>
        <p class="card-text">Jeans Wanita dengan ukuran panjang semata kaki. Hadir dengan potongan loose fit yang kasual.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/9.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Tas Ransel Roll Top</h5>
        <p class="card-text">Tas dengan kapasitas penyimpanan besar, dengan detail fungsional. Cocok untuk kasual maupun bisnis.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/10.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Tas Bahu Mini Flap Faux Leather</h5>
        <p class="card-text">Tas serbaguna dengan tampilan premium. Ukuran yang pas untuk bertamasya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/11.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">AIRism Piyama Lengan Panjang</h5>
        <p class="card-text">Piyama wanita dari bahan jersey stretch yang nyaman untuk alasan kesehatan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/12.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Piyama Satin Lengan Pendek</h5>
        <p class="card-text">Piyama Wanita yang fleksibel dan nyaman. Set atasan dan bawahan untuk bersantai di rumah.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/13.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">AIRism Katun T-Shirt Kerah Bulat Uniqlo U</h5>
        <p class="card-text">T-shirt Anak dengan tampilan katun dan performa AIRism. T-shirt simpel yang mudah dipadupadankan dengan berbagai outfit.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/14.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">KIDS AIRism Jaket Mesh Hoodie UV Protection</h5>
        <p class="card-text">Jaket hoodie Anak yang sejuk dan nyaman. Cocok untuk berolahraga dengan perlindungan ekstra dari sinar UV (UPF50+).</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/15.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">KIDS Jaket Sweat Dry Ultra Stretch Hoodie Retsleting</h5>
        <p class="card-text">Jaket hoodie Anak berperforma tinggi yang terbuat dari bahan sweat. Cepat kering dengan detail bahan yang disukai oleh anak-anak.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/16.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">KIDS Celana Legging Ultra Stretch</h5>
        <p class="card-text">Celana legging anak yang luar biasa stretch, mudah bergerak saat memakainya. Siluet ramping yang cocok untuk layering.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/17.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">KIDS HEATTECH Topi Rajut</h5>
        <p class="card-text">Topi Anak dari bahan HEATTECH untuk kehangatan luar biasa. Hadir dengan bahan rajut rib untuk mudah dipadankan dengan segala outfit.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/18.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">KIDS Celana Pendek Relax Katun Ringan Minecraft</h5>
        <p class="card-text">Game populer dan terfavorit banyak orang di seluruh dunia, Minecraft, kembali dalam koleksi UT.</p>
      </div>
    </div>
  </div>
</div>

<!--/ Card layout -->
@endsection
