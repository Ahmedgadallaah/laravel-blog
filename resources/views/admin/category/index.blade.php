@extends('layouts.app')

@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">
			Categories
		</div>
		<div class="panel-body">
			<table class="table table-hover">
		<thead>
			<th>
				Category name
			</th>
			<th>
				Edit
			</th>
			<th>
				Delete
			</th>
			
		</thead>
		<tbody>
			
			@if($Category->count() > 0)

			@foreach($Category as $category)
				<tr>
					<td>
						{{ $category->name }}
					</td>
					<td>
						<a href="{{ route('category.edit',['id' => $category->id ]) }}"
						 class="btn btn-xs btn-primary">Edit</a>
						 
					</td>

					<td>
						<a href="{{ route('category.delete',['id' => $category->id ]) }}"
						 class="btn btn-xs btn-danger">Delete</a>
						
					</td>

				</tr>	

			@endforeach

			@else
			<tr>
					<th colspan="5" class="text-center"> No Categories</th>
				</tr>

			@endif	
		</tbody>
			</table>
		</div>
	</div>
@stop