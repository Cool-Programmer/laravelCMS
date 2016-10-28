@extends('layouts.admin')

	@section('content')
		<h1 class="page-header">Create post</h1>
		@include('includes.formerrors')
		{!! Form::open(['method'=>'post', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
			<div class="form-group">
				{!! Form::label('title', 'Title', ['class'=>'form-control, label label-primary']) !!}
				{!! Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('category_id', 'Category', ['class'=>'form-control, label label-primary']) !!}
				{!! Form::select('category_id', [''=>'Select one'] + $categories, null, ['class'=>'form-control']) !!}
			</div>


			<div class="form-group">
				{!! Form::label('photo_id', 'Picture', ['class'=>'form-control, label label-primary']) !!}
				{!! Form::file('photo_id', []) !!}
			</div>

			<div class="form-group">
				{!! Form::label('body', 'Content', ['class'=>'form-control, label label-primary']) !!}
				{!! Form::textarea('body', null, ['class'=>'form-control makeSmart']) !!}
			</div>	

			<div class="form-group">
				{!! Form::submit('Add post', ['class'=>'btn btn-primary btn-sm']) !!}
			</div>	

		{!! Form::close() !!}
	@endsection()
	