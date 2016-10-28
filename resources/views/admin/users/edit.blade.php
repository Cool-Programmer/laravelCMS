@extends('layouts.admin')

@section('content')
	<h1 class="page-header">Edit</h1>

	@include('includes.formerrors')
	<div class="col-sm-3">
		<img width="170" height="85"  class="img img-responsive" src="{{$user->photo ? $user->photo->path : 'http://placehold.it/400x400'}}">
	</div>

	<div class="col-sm-9">
		{!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
			<div class="form-group">
				{!! Form::label('name', 'Name', ['class'=>'form-control, label label-primary']) !!}
				{!! Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
			</div>
			{{-- {!! Form::text($name, $value, []) !!} --}}

			<div class="form-group">
				{!! Form::label('email', 'Email', ['class'=>'form-control, label label-primary']) !!}
				{!! Form::email('email', $user->email, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('photo_id', 'Picture', ['class'=>'form-control, label label-primary']) !!}
				{!! Form::file('photo_id', []) !!}
			</div>

			<div class="form-group">
				{!! Form::label('role_id', 'Role', ['class'=>'form-control, label label-primary']) !!}
				{!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('is_active', 'Status', ['class'=>'form-control, label label-primary']) !!}
				{!! Form::select('is_active', [1=>'Active', 2=>'Not Active'], $user->role->name, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Update', ['class'=>'btn btn-primary btn-sm col-sm-6 makeSM']) !!}
			</div>
		{!! Form::close() !!}

		{{-- DELETE FORM --}}
		{!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
			{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm col-sm-6 makeSM']) !!}
		{!! Form::close() !!}
	</div>
@endsection()