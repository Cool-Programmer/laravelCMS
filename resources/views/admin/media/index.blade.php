@extends('layouts.admin')

@section('content')
	<h1 class="page-header">Media</h1>

	{{-- FLASHING STUFF. CONTINUE --}}
	@if(Session::has('deleted_image'))
		<div class="alert alert-danger">
			{{session('deleted_image')}}
		</div>
	@endif()

	<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Picture</th>
        <th>Uploaded</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
		
		@if(count($photos)>0)
			@foreach($photos as $photo)
				<tr>
					<td>{{$photo->id}}</td>
					<td><img height="40" width="70" class="img img-responsive" src="{{$photo->path ? $photo->path : 'http://placehold.it/70x30'}}" alt=""></td>
					<td>{{$photo->created_at->diffForHumans()}}</td>
					<td>
					{{-- DELETE FORM --}}
					{!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediaController@destroy', $photo->id]]) !!}
						{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}
					{!! Form::close() !!}
					</td>
				</tr>
			@endforeach()
		@endif()    
      
    </tbody>
  </table>
@endsection()