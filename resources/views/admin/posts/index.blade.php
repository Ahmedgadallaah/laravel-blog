@extends('layouts.app')

@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">
			Posts
		</div>
		<div class="panel-body">
			<table class="table table-hover">
		<thead>
			<th>
				Image
			</th>
			<th>
				Post title
			</th>
			<th>
				Edit
			</th>
			<th>
				Trash
			</th>
			
		</thead>
		<tbody>
			@if($posts->count() > 0)
			@foreach($posts as $post)
				<tr>
					<td><img src="{{ $post->featured }}" alt="{{$post->title}}" width="100px" height="50px" /></td>
					<td>
						{{ $post->title }}
					</td>
					<td>
						<a href="{{ route('post.edit',['id' => $post->id]) }}"
						 class="btn btn-xs btn-primary">Edit</a>
						 
					</td>

					<td>
						<a href="{{ route('post.delete',['id' => $post->id]) }}"
						 class="btn btn-xs btn-danger">Trash</a>
						
					</td>

				</tr>	

			@endforeach

			@else
			<tr>
					<th colspan="5" class="text-center"> No Posts</th>
				</tr>

			@endif
		</tbody>
			</table>
		</div>
	</div>
@stop
