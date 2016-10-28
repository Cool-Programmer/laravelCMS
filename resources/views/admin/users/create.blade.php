@extends('layouts.admin')

@section('content')
	<h1 class="page-header">Add</h1>

	@include('includes.formerrors')
	
	{!! Form::open(['method'=>'post', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name', ['class'=>'form-control, label label-primary']) !!}
			{!! Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Name']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email', ['class'=>'form-control, label label-primary']) !!}
			{!! Form::email('email', '', ['class'=>'form-control', 'placeholder'=>'Email']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Password', ['class'=>'form-control, label label-primary']) !!}
			{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('photo_id', 'Picture', ['class'=>'form-control, label label-primary']) !!}
			{!! Form::file('photo_id', []) !!}
		</div>

		<div class="form-group">
			{!! Form::label('role_id', 'Role', ['class'=>'form-control, label label-primary']) !!}
			{!! Form::select('role_id', $roles, 3, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('is_active', 'Status', ['class'=>'form-control, label label-primary']) !!}
			{!! Form::select('is_active', [1=>'Active', 2=>'Not Active'], 0, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Add user', ['class'=>'btn btn-primary btn-sm']) !!}
		</div>
	{!! Form::close() !!}
@endsection()