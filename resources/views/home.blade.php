@extends('layout.app')

@section('title')
  Home
  @endsection

  @section('content')
  <div class="row g-3 p-1 text-center">
    <div class="col-4">
    <div class="p-3 border bg-light mt-3">
        <br>
        <a class="nav-link" href="/barang"><h5>Barang</h5> <i class="fa fa-boxes"></i></a>
        <br>
    </div>
    </div>
</div>

<div class="row g-3 p-1 text-center">
<div class="col-4">
     <div class="p-3 border bg-light mt-3">
        <br>
        <a class="nav-link" href="/kategori"><h5>Kategori</h5> <i class="fa fa-tag"></i></a>
        <br>
     </div>
</div>
</div>

<div class="row g-3 p-1 text-center">
<div class="col-4">
     <div class="p-3 border bg-light mt-3">
        <br>
        <a class="nav-link" href="/supplier"><h5>Supplier</h5> <i class="fa fa-truck"></i></a>
        <br>
     </div>
</div>
</div>

<div class="row g-3 p-1 text-center">
<div class="col-4">
     <div class="p-3 border bg-light mt-3">
        <br>
        <a class="nav-link" href="/pembeli"><h5>Pembeli</h5> <i class="fa fa-person"></i></a>
        <br>
     </div>
</div>
</div>

<div class="row g-3 p-1 text-center">
<div class="col-4">
     <div class="p-3 border bg-light mt-3">
        <br>
        <a class="nav-link" href="/pembelian"><h5>Pembelian</h5> <i class="fa fa-cart-shopping"></i></a>
        <br>
     </div>
</div>
</div>

<div class="row g-3 p-1 text-center">
<div class="col-4">
     <div class="p-3 border bg-light mt-3">
        <br>
        <a class="nav-link" href="/penjualan"><h5>Penjualan</h5> <i class="fa fa-basket-shopping"></i></a>
        <br>
     </div>
</div>
</div>

</div>

  @endsection