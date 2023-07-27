@extends('pelanggan.layouts.pelanggan')
@section('content')
  <style>
    .d-flex a {
      color: #adb5bd;
    }

    .d-flex a.active {
      color: #212529;
    }

    .d-flex a:hover {
      color: black;
    }
  </style>
  <section class="container">
    <h3>Kost Ibani</h3>
    <div class="row align-items-center">
      <div class="col-md-8">
        <img
          src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
          class="img-fluid rounded" alt="Large Image">
      </div>
      <div class="col-md-4 d-flex flex-column gap-3">
      <img src="{{ asset('images/p2.JPEG') }}" class="card-img-top" alt="...">
          <img src="{{ asset('images/p1.JPEG') }}" class="card-img-top" alt="...">
      </div>
    </div>
    <div class="d-flex justify-content-between align-items-center my-3">
      <div class="d-flex gap-4 align-items-center">
        <button type="button" class="btn btn-lg btn-outline-dark" disabled>Kost Putri</button>
        <div class="fs-4">
          <i class="fa-solid fa-location-dot"></i>
          <span>Condong Catur</span>
        </div>
        <div class="fs-4 text-danger">
          <i class="fa-solid fa-door-open"></i>
          <span>Kamar Penuh</span>
        </div>
      </div>
      <div>
        <span>Rp 1.500.000</span>
      </div>
    </div>
    <hr>
    <div class="d-flex justify-content-between align-content-center my-3">
      <div class="d-flex gap-4">
        <a href="#" class="active fs-5 fw-medium text-decoration-none">Deskripsi</a>
        <a href="#" class="fs-5 fw-medium text-decoration-none">Fasilitas</a>
        <a href="#" class="fs-5 fw-medium text-decoration-none">Peraturan Kost</a>
      </div>
      <div class="d-flex gap-4">
        <button type="button" class="btn btn-lg btn-outline-dark">Chat Pemilik <i
            class="far fa-comment"></i></button>
        <button type="button" class="btn btn-lg btn-outline-dark">Ajukan Sewa</button>
      </div>
    </div>
    <hr>
    <div class="d-flex flex-column mb-5">
      <p class="fs-4">
        Kost ini terdiri dari 5 lantai dengan lokasi yang strategis yang memiliki jendela
        menghadap ke arah luar.
      </p>
      <p class="fs-4">
        .............
      </p>
      <a href="">Selengkapnya</a>
    </div>
  </section>
@endsection
