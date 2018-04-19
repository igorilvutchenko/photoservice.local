@extends('layouts.app')

@section('content')

<h1>Ваш шаблон № {{  $layout_id }}</h1>
<h3>Выберите {{ $images_count }} фотографии</h3>

<form method="POST" action="{{ url('/layout_config') }}" enctype="multipart/form-data">
			@csrf
@foreach($images as $image)
<div class="form-check form-check-inline">
  <input class="form-check-input" name="images[]" type="checkbox" id="inlineCheckbox1" value="{{$image->image_id}}">
  <label class="form-check-label" for="inlineCheckbox1"><img src="{{ url('storage/' . $user_id . '/images/' . $image->image) }} " style="height: 50px"/></label>
</div>		
	@endforeach

	<button type="submit" class="btn btn-primary">Выбрать</button>
			</form>

@endsection