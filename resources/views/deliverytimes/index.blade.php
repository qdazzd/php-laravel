@extends('layout')
@section('content')
<h1>List of Delivery time</h1>

@if(session()->has('status'))
<h3 style="color:red;">{{ session()->get('status') }}</h3>
@endif

<ul>
    @forelse($deliverytimes  as $delivery)
    <li>
        <h2> {{ $delivery->namecity }}</h2>
            </li>

<h2 style="margin-left:100px;">period : {{ $delivery->delivery_at }}</h2>
      
    @empty 
    <span> Not Delivery time</span>
    @endforelse
</ul>
@endsection