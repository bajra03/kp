<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('name', 'Nama') !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Nama user...' ]) !!}
	{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
	{!! Form::label('username', 'Username') !!}
	{!! Form::text('username', null, ['class' => 'form-control', 'id' => 'username', 'placeholder' => 'Username...' ]) !!}
	{!! $errors->first('username', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
	{!! Form::label('password', 'Password') !!}
	{!! Form::text('password', '', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Password...' ]) !!}
	{!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
	{!! Form::label('role', 'Privileges') !!}
	{!! Form::select('role', ['admin' => 'Administrator', 'user' => 'Karyawan'], null, ['class' => 'form-control', 'id' => 'role', 'placeholder' => '-- Privileges --' ]) !!}
	{!! $errors->first('role', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
	{!! Form::button(isset($model) ? 'Edit' : 'Simpan', ['class' => 'btn btn-success', 'type' => 'submit']) !!}
</div>