@extends('layouts.admin')

@section('content')
	<h1 class="page-header">Edit Category</h1>
	<div class="col-md-6">
	{{-- UPDATE --}}
		{!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name', ['class'=>'form-control, label label-primary']) !!}
			{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Title']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Update', ['class'=>'btn btn-primary btn-sm col-sm-6 makeSM']) !!}
		</div>
	{!! Form::close() !!}

	{{-- DELETE --}}
		{!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}
			{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm col-sm-6 makeSM']) !!}
		{!! Form::close() !!}
	</div>

	
@endsection()