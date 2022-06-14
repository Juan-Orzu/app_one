@extends('layout')

@section('title', 'Portfolio')

@section('content')
	<h1>Portfolio</h1>

	<ul>
		@forelse ($portfolio as $portfolio)
			<li> {{$portfolio['title']}} </li>
		@empty
			<li>No hay informacion</li>
		@endforelse
	</ul>
@endsection
