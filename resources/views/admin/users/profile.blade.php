@extends('layouts.app')

@section('content')

	@include('admin.includes.errors')


	<div class="panel panel-primary">
		<div class="panel-heading">
		
		Edit your profile
		</div>

		<div class="panel-body">
			<form action="{{ route('user.profile.update')}}" method="post" enctype="multipart/form-data" >
				{{ csrf_field() }}
				<div class="form-group">
					<label for="username">User Name</label>
					<input type="text" name="name" value="{{$user->name}}" class="form-control">
				</div>

				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" name="email"  value="{{$user->email}}"class="form-control">
				</div>

				<div class="form-group">
					<label for="password">New Password</label>
					<input type="password" name="password" class="form-control">
				</div>

				<div class="form-group">
					<label for="avatar">Avatar</label>
					<input type="file" name="avatar"  class="form-control">
				</div>

				<div class="form-group">
					<label for="facebook">Facebook link</label>
					<input type="text" name="facebook"  value="{{$user->profile->facebook}}" class="form-control">
				</div>

				<div class="form-group">
					<label for="youtube">Youtube link</label>
					<input type="text" name="youtube"  value="{{$user->profile->youtube}}" class="form-control">
				</div>

				<div class="form-group">
					<label for="about">about</label>
					<textarea name="about" id="about" cols="6" rows="6" class="form-control"> {{$user->profile->about}}</textarea>
					</div>

				
				
				
				<div class="form-group">
					<div class="text-center">
						<button type="submit" class="btn btn-primary text-center">
							Update Profile
						</button>
					</div> 
				</div>
				
			</form>
		</div>
	</div>

	
@stop