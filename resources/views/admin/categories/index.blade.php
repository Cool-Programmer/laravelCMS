@extends('layouts.admin')

@section('content')
	<h1 class="page-header">Categories</h1>


<div class="col-md-6">
	@include('includes.formerrors')
	{{-- CREATE --}}
	{!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name', ['class'=>'form-control, label label-primary']) !!}
			{!! Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Title']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Add', ['class'=>'btn btn-sm btn-primary']) !!}
		</div>
	{!! Form::close() !!}
</div>

<div class="col-md-6">
	{{-- DISPLAY --}}
	<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
		
		@if(count($categories) > 0)
			@foreach($categories as $category)
				<tr>
					<td>{{$category->id}}</td>
					<td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></td>
					<td>{{$category->created_at->diffForHumans()}}</td>
					<td>{{$category->updated_at->diffForHumans()}}</td>
				</tr>
			@endforeach()
		@endif()
      
    </tbody>
  </table>
</div>
@endsection()