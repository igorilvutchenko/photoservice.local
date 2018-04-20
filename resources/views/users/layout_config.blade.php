@extends('layouts.app')

@section('content')


<h1>Hello</h1>

@for($i=0; $i<count($results); $i++)

{{ $results[$i] }}
	{{-- <img src="{{ url('storage/' . $user_id . '/images/' . $results[$i]) }} " style="height: 50px"/></label> --}}


@endfor

@endsection