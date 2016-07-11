@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> User</a>
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>Role</th>
							<th colspan="2">Option</th>
						</tr>
					</thead>
					<tbody>
						@forelse($users as $no => $user)
						<tr>
							<td>{{ $no + 1 }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->role }}</td>
							<td>
								<a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
							</td>
							<td>
							@if($user->username !== 'admin')
								{!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
									{!! Form::button('<i class="fa fa-trash"></i> Hapus', ['class' => 'btn btn-danger click-warning', 'type' => 'submit']) !!}
								{!! Form::close() !!}
							@endif
							</td>
						</tr>
						@empty						
						<tr>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
						@endforelse
					</tbody>
					<tfoot>
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>Role</th>
							<th colspan="2">Option</th>
						</tr>
					</tfoot>
				</table>
				{{ $users->links() }}
			</div>
		</div>
	</div>
@endsection
