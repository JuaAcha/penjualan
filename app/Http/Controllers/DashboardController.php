<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Supplier;
use App\Models\Pembeli;
use App\Models\Pembelian;
use App\Models\Penjualan;

class DashboardController extends Controller
{
    public function index() {
        $barang = Barang::all();
        $kategori = Kategori::all();
        $supplier = Supplier::all();
        $pembeli = Pembeli::all();
        $pembelian = Pembelian::all();
        $penjualan = Penjualan::all();
        return view('home', compact('barang', 'kategori', 'supplier', 'pembeli', 'pembelian', 'penjualan'));
    }
}