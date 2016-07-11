@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				{!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PATCH']) !!}
					@include('users._form', ['model' => $user]);
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
