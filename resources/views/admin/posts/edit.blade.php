@extends('layouts.app')

@section('content')

	@include('admin.includes.errors')


	<div class="panel panel-primary">
		<div class="panel-heading">
		
		Edit Post: {{ $post->title }}
		</div>

		<div class="panel-body">
			<form action="{{ route('post.update',['id' => $post->id])}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" value="{{ $post->title}}" name="title" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="featured">Featured image</label>
					<input type="file" value="{{ $post->featured}}" name="featured" class="form-control">
				</div>	

				<div class="form-group">
					<label for="category">Select a Category</label>
					<select name="category_id" id="category"  class="form-control">
						@foreach($categories as $category)
							<option value="{{ $category->id }}"

								@if($post->category->id == $category->id)
									selected
								@endif

								>{{ $category->name }}</option>
						@endforeach
					</select> 
				</div>

				<div class="form-group">
					@foreach($tags as $tag)

						<div class="checkbox">
						
						<label ><input name="tags[]" type="checkbox" value="{{ $tag->id }}"

							@foreach($post->tags as $t)

							@if($tag->id == $t->id)
							 checked

							@endif

							@endforeach
							> {{ $tag->tag }}</label>
						
						</div>

					@endforeach
				</div>

				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" id="content" cols="5" rows="5" class="form-control" >{{ $post->content }}</textarea> 
				</div>

				<div class="form-group">
					<div class="text-center">
						<button type="submit" class="btn btn-primary">
							Update Post
						</button>
					</div> 
				</div>
				
			</form>
		</div>
	</div>

	
@stop