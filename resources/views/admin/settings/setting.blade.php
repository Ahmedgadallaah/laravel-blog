@extends('layouts.app')

@section('content')

	@include('admin.includes.errors')


	<div class="panel panel-primary">
		<div class="panel-heading">
		
		Edit blog Settings
		</div>

		<div class="panel-body">
			<form action="{{ route('settings.update')}}" method="post" >
				{{ csrf_field() }}
				<div class="form-group">
					<label for="tag">Site Name</label>
					<input type="text" name="site_name" value="{{$settings->site_name}}" class="form-control">
				</div>

				<div class="form-group">
					<label for="tag"> Address</label>
					<input type="text" name="address" value="{{$settings->address}}" class="form-control">
				</div>

				<div class="form-group">
					<label for="tag"> Contact Number</label>
					<input type="text" name="contact_number" value="{{$settings->contact_number}}"class="form-control">
				</div>

				<div class="form-group">
					<label for="tag"> Contact Email</label>
					<input type="text" name="contact_email" value="{{$settings->contact_email}}"class="form-control">
				</div>

				
				
				
				<div class="form-group">
					<div class="text-center">
						<button type="submit" class="btn btn-primary text-center">
							update site Settings
						</button>
					</div> 
				</div>
				
			</form>
		</div>
	</div>

	
@stop