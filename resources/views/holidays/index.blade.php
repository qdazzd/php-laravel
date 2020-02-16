@extends('layout')
@section('content')
<h1>List of Holidays</h1>

@if(session()->has('status'))
<h3 style="color:red;">{{ session()->get('status') }}</h3>
@endif

<ul>
    @forelse($holidays  as $holiday)
    <li>
        <h2> {{ $holiday->namecity }}</h2>
            </li>
<h3 style="margin-left:100px;">Date debut : {{ $holiday->date_debut }}</h3>
<h3 style="margin-left:100px;">Date fin : {{ $holiday->date_fin }}</h3>
<h3 style="margin-left:100px;">Status : {{ $holiday->status }}</h3>
      
    @empty 
    <span> Not Holiday</span>
    @endforelse
</ul>
@endsection