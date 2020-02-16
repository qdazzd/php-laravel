<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
    <li class="nav-item"> <a href="/home">Home</a> </li>
    <li class="nav-item"> <a href="/cities">List City</a> </li>
    <li class="nav-item"> <a href="{{route('cities.create')}}">New City</a> </li>
    <li class="nav-item"> <a href="/deliverytimes">List Delivery times</a> </li>
    <li class="nav-item"> <a href="{{route('deliverytimes.create')}}">New Delivery time</a> </li>
    <li class="nav-item"> <a href="/holidays">List Holidays</a> </li>
    <li class="nav-item"> <a href="{{route('holidays.create')}}">New Holiday</a> </li>
    </ul>
    @yield('content')

</body>
</html>
