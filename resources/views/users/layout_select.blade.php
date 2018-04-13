@extends('layouts.master')

@section('content')

<h1 class="title">Выберите шаблон</h1>
<ul class="list-group list-group-flush">
  <li class="list-group-item"><a href="#"><img src="{{ url('storage/layouts/layout1prev.png') }} "style="max-height: 150px"/>Шаблон на 4 фотографии</a></li>
  <li class="list-group-item"><a href="#"><img src="{{ url('storage/layouts/layout2prev.png') }} "style="max-height: 150px"/> Шаблон на две кавдратных и одну вертикальную фотографию</a></li>
  <li class="list-group-item"><a href="#"><img src="{{ url('storage/layouts/layout3prev.png') }} "style="max-height: 150px"/>Шаблон на две квадратных и одну горизонтальную фотографию</a></li>
</ul>

@endsection