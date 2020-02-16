@extends('layout')
    
@section('content')
  
<h1>New Delivery time</h1>
<form method="POST" action="{{route('deliverytimes.store')}}">
    @csrf
    <div>
        <select id="selectcity" name="selectcity" style="width:150px; margin-left:100px;">
            <option value="" disabled selected>
                please select city
            </option>
            @foreach ($cities as $city)
        <option value="{{ $city->id }}" >
                {{ $city->namecity }}
            </option>  
            @endforeach
        </select>
    </div><br>
<div>
    <label for="content"> Delivery time :</label><input  name="delivery_at" id="delivery_at"  type="text" value="{{ old('delivery_at',$delivery_at->delivery_at ?? null) }}" >
</div><br>
<button  type="submit" style="background-color:#003;color:white;font-size:17px;height:35px;">Add new Delivery time</button>

@if($errors->any())
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif

</form>
  
@endsection 