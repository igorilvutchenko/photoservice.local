@extends('layouts.master')

@section('content')

<form method="POST" action="{{ url('/') }}" enctype="multipart/form-data">
@csrf
  <div class="form-group row">
    <label for="projectName" class="col-sm-3 col-form-label">Название проекта</label>
    <div class="col-sm-9">
      <input id="projectName" type="text" name="name" value="{{ old('name') }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="upload" class="col-sm-3 col-form-label">Загрузите изоражения (Макс. 10) </label>
    <div class="col-sm-9">
      <input id="upload" type="file" name="image[]" multiple />
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Загрузить</button>
</form>

@endsection
