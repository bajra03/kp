@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<h1 class="page-title">Detail {{ $barang->nama_barang }}</h1>
		<p>Stoknya: {{ $barang->stok }} biji.</p>
		<p>Kategori: {{ $barang->kategori }}</p>
	</div>
</div>

@endsection