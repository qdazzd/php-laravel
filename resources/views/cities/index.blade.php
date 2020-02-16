@extends('layout')
@section('content')
<h1>List of Cities</h1>

@if(session()->has('status'))
<h3 style="color:red;">{{ session()->get('status') }}</h3>
@endif

<ul>
    @forelse($cities as $city)
    <li>
<h2> {{ $city->namecity }}</h2>
    </li>

  
    @empty 
    <span> Not City</span>
    @endforelse
</ul>
@endsection