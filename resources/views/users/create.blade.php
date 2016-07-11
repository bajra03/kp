@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
					@include('users._form');
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
