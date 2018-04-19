@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			<form method="POST" action="{{ url('/layout_select/') }}" enctype="multipart/form-data">
			@csrf
			  <div class="form-group row">
			    <label for="upload" class="col-md-4 col-form-label">Загрузите изоражения (Макс. 10)</label>
			    <div class="col-md-4">
			    	<input id="upload" type="file" name="image[]" multiple />
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Загрузить</button>
			</form>
		</div>
	</div>
</div>

@endsection
