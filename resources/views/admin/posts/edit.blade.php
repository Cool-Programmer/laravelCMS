@extends('layouts.admin')
@section('content')
	<h1 class="page-header">Edit post</h1>
	@include('includes.formerrors')
		<div class="col-md-3">
			<img width="170" height="85"  class="img img-responsive" src="{{$post->photo ? $post->photo->path : 'http://placehold.it/400x400'}}">
		</div>

		<div class="col-md-9">
		{!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}
			
			<div class="form-group">
				{!! Form::label('title', 'Title', ['class'=>'form-control, label label-primary']) !!}
				{!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Title']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('category_id', 'Category', ['class'=>'form-control, label label-primary']) !!}
				{!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
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
				{!! Form::submit('Update post', ['class'=>'btn btn-primary btn-sm col-sm-6 makeSM']) !!}
			</div>	

		{!! Form::close() !!}

		{{-- DELETE FORM --}}
		{!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}
			{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm col-sm-6 makeSM']) !!}
		{!! Form::close() !!}
		</div>
@endsection()