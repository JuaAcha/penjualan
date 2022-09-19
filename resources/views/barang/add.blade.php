@extends('layout.app')

@section('title')
    Barang
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Barang</h5>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="nama">Nama Barang</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-lg-6">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" id="harga" value="{{ old('harga') }}" class="form-control @error('harga') is-invalid @enderror">
                        @error('harga')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-lg-2">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" id="stok" value="{{ old('stok') }}" class="form-control @error('stok') is-invalid @enderror">
                        @error('stok')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>  
                    <div class="col-lg-5">
                        <label for="supplier" class="form-label">Supplier</label>
                        <select name="supplier_id" id="supplier_id" value="{{ old('supplier_id') }}" class="form-control @error('supplier_id') is-invalid @enderror">
                            <option selected="">Pilih...</option>
                            @foreach ($supplier as $s)
                                <option value="{{ $s->id }}">{{ $s->nama}}</option>
                            @endforeach
                        </select>
                        @error('supplier_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-5">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="kategori_id" id="kategori_id" value="{{ old('kategori_id') }}" class="form-control @error('kategori_id') is-invalid @enderror">
                            <option selected="">Pilih...</option>
                            @foreach ($kategori as $item)
                                <option value="{{ $item->id }}">{{ $item->nama}}</option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>    
            </div>    
        </form>
    </div>
</div>
@endsection