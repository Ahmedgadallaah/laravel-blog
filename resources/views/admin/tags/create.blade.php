@extends('layouts.app')

@section('content')

	@include('admin.includes.errors')


	<div class="panel panel-primary">
		<div class="panel-heading">
		
		Create A New Tag
		</div>

		<div class="panel-body">
			<form action="{{ route('tag.store')}}" method="post" >
				{{ csrf_field() }}
				<div class="form-group">
					<label for="tag">Tag</label>
					<input type="text" name="tag" class="form-control">
				</div>
				
				
				<div class="form-group">
					<div class="text-center">
						<button type="submit" class="btn btn-primary text-center">
							Store Tag
						</button>
					</div> 
				</div>
				
			</form>
		</div>
	</div>

	
@stop