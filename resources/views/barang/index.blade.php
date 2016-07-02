@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<h1 class="page-title">Barang</h1>
		<a href="{{ route('barang.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>

		<table class="table">
			<thead>
				<tr>
					<th>Nama Barang</th>
					<th>Stok</th>
					<th>Kategori</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>				
				@foreach($barang as $b)
					<tr>
						<td><a href="{{ route('barang.show', $b->id) }}">{{ $b->nama_barang }}</a></td>
						<td>{{ $b->stok }}</td>
						<td>{{ $b->kategori }}</td>
						<td><a href="{{ route('barang.edit', $b->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a></td>
						<td>
							<form action="{{ route('barang.destroy', $b->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
							</form>
						</td>
					</tr> 
				@endforeach
			</tbody>
		</table>
		{{ $barang->links() }}
	</div>
</div>

@endsection