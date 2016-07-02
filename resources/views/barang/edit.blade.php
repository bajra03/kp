@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<form action="{{ route('barang.update', $barang->id) }}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="PUT">
			<div class="form-group">
				<label>Nama Barang:</label>
				<input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control">
			</div>
			<div class="form-group">
				<label>Stok:</label>
				<input type="text" name="stok" value="{{ $barang->stok }}" class="form-control">
			</div>
			<div class="form-group">
				<label>KAt:</label>
				<input type="text" name="kategori" value="{{ $barang->kategori }}" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" value="Tambah Barang" class="btn btn-success">
			</div>
		</form>
	</div>
</div>

@endsection