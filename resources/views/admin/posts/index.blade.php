@extends('layouts.admin')

@section('content')
	<h1 class="page-header">Posts</h1>
	
	{{-- FLASHING MSG --}}
	@if(Session::has('deleted_post'))
		<div class="alert alert-danger">
			{{session('deleted_post')}}
		</div>
	@endif()

	<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Created by</th>
        <th>Category</th>
        <th>Title</th>
        <th>Content</th>
        <th>Posted</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
		
		@if(count($posts)>0)
			@foreach($posts as $post)
				<tr>
					<td>{{$post->id}}</td>
					<td><img height="30" width="90" class="img img-responsive" src="{{$post->photo ? $post->photo->path : 'http://placehold.it/90x50'}}" alt="Post Image"></td>
					<td>{{$post->user->name}}</td>
					<td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
					<td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</a></td>
					<td>{{str_limit($post->body, 9)}}</td>
					<td>{{$post->created_at->diffForHumans()}}</td>
					<td>{{$post->updated_at->diffForHumans()}}</td>
				</tr>
			@endforeach()
		@endif()    
      
    </tbody>
  </table>
@endsection()