@extends('layouts.app')

@section('content')

	@include('admin.includes.errors')


	<div class="panel panel-primary">
		<div class="panel-heading">
		
		Create A New User
		</div>

		<div class="panel-body">
			<form action="{{ route('user.store')}}" method="post" >
				{{ csrf_field() }}
				<div class="form-group">
					<label for="tag">User Name</label>
					<input type="text" name="name" class="form-control">
				</div>

				<div class="form-group">
					<label for="tag">User E-mail</label>
					<input type="text" name="email" class="form-control">
				</div>

				
				
				
				<div class="form-group">
					<div class="text-center">
						<button type="submit" class="btn btn-primary text-center">
							Add User
						</button>
					</div> 
				</div>
				
			</form>
		</div>
	</div>

	
@stop