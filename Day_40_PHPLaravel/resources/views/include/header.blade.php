<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="{{asset('/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">NAHID</a>
        <ul class="navbar-nav ml-auto">

            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('about-us')}}" class="nav-link">About</a></li>
            <li><a href="{{route('register-now')}}" class="nav-link">Registation</a></li>
            <li><a href="{{route('count')}}" class="nav-link">Count</a></li>
            <li><a href="" class="nav-link">Logout</a></li>
        </ul>
    </div>
</nav>
