@extends('layout')
    
@section('content')
  
<h1>New City</h1>
<form method="POST" action="{{route('cities.store')}}">
    @csrf
<div>
    <label for="content">Name City :</label><input  name="namecity" id="namecity"  type="text" value="{{ old('namecity',$city->namecity ?? null) }}" >
</div><br>
<button  type="submit">Add new City</button>
@if($errors->any())
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif
</form>
  
@endsection 