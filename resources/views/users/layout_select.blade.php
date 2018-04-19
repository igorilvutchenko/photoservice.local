@extends('layouts.app')

@section('content')

<h1 class="title">Выберите шаблон</h1>
<ul class="list-group list-group-flush">
	@foreach($layouts as $layout)
  		<li class="list-group-item"><img src="{{ url('storage/layouts/' . $layout->layout_name . 'prev.png') }} " style="max-height: 50px"/>{{ $layout->layout_description }}<a href="{{ url($layout->layout_id . '/layout_images_select/') }}" class="btn btn-secondary btn-sm">Выбрать</a></li>
	@endforeach
</ul>

<h2>Вы загрузили следующие фотографии</h2>

	@foreach($images as $image)
		<div class="col-md-1">
			<img src="{{ url('storage/' . $user_id . '/images/' . $image->image) }} " style="height: 50px"/>
		</div>
	@endforeach

@endsection