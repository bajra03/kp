@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<form action="{{ route('barang.store') }}" method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label>Nama Barang:</label>
				<input type="text" name="nama_barang" class="form-control">
			</div>
			<div class="form-group">
				<label>Stok:</label>
				<input type="text" name="stok" class="form-control">
			</div>
			<div class="form-group">
				<label>KAt:</label>
				<input type="text" name="kategori" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" value="Tambah Barang" class="btn btn-success">
			</div>
		</form>
	</div>
</div>

@endsection