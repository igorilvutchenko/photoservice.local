@extends('layouts.app')

@section('content')

<h1 class="title">Выберите шаблон</h1>
<ul class="list-group list-group-flush">
	@foreach($layouts as $layout)
  		<li class="list-group-item"><a href="#"><img src="{{ url('storage/layouts/' . $layouts->layout_name . 'prev.png') }} "style="max-height: 50px"/>$layouts->layout_description</a></li>
	@endforeach
</ul>

{{ $layouts->links() }}

@endsection