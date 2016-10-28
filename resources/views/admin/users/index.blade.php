@extends('layouts.admin')

@section('content')
	<h1 class="page-header">Users</h1>
	
	{{-- FLASHING STUFF. CONTINUE --}}
	@if(Session::has('deleted_user'))
		<div class="alert alert-danger">
			{{session('deleted_user')}}
		</div>
	@endif()

	<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Photo</th>
        <th>Email</th>
        <th>Role</th>
        <th>Active</th>
        <th>Registered</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
		
		@if(count($users)>0)
			@foreach($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
					<td><img width="70" class="img img-responsive" height="30" src="{{$user->photo ? $user->photo->path : 'http://placehold.it/70x30'}}"></td>
					<td>{{$user->email}}</td>
					<td>{{$user->role->name}}</td>
					<td>{{$user->is_active==1 ? 'Active' : 'Not Active'}}</td>
					<td>{{$user->created_at->diffForHumans()}}</td>
					<td>{{$user->updated_at->diffForHumans()}}</td>
				</tr>
			@endforeach()
		@endif()    
      
    </tbody>
  </table>
@endsection()