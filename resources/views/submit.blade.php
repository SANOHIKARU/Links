@extends('default')

@section('content')
	<div class="container">
		<div class="row">
			<h1>Submit a link</h1>
			<form action="/submit" method="post">
				{!! csrf_field() !!}
		
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title" name="title" placeholder="Title">
				</div>

				<div class="form-group">
					<label for="url">URL</label>
						<input type="text" class="form-control" id="url" name="url">
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" name="description" id="description" placeholder="description"></textarea>
				</div>

				<!-- <div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" id="description" name="description" placeholder="description"></textarea>
				</div> -->

				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
	@endsection
