@extends('layout')
    
@section('content')
  
<h1>New Holiday</h1>
<form method="POST" action="{{route('holidays.store')}}">
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
        <label for="content"> status :</label><input  name="date_debut" id="date_debut"  type="date" value="{{ old('date_debut',$date_debut->date_debut ?? null) }}" >
    </div><br>
    <div>
        <label for="content"> status :</label><input  name="date_fin" id="date_fin"  type="date" value="{{ old('date_fin',$date_fin->date_fin ?? null) }}" >
    </div><br>
<div>
    <label for="content"> status :</label><input  name="status" id="status"  type="text" value="{{ old('status',$status->status ?? null) }}" >
</div><br>
<button  type="submit" style="background-color:#003;color:white;font-size:17px;height:35px;">Add new Holiday</button>

@if($errors->any())
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif

</form>
  
@endsection 