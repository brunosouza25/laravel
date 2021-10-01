@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
<h1>aaaaaaaaa</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10 > 5)
    <h2>true</h2>
@endif

@if($name == 'bruno')
    <p>o nome é bruno</p>
    <p>e tem: {{ $age }}</p>
    <p>e ele é {{ $profession }}</p>
@else
    <p>não é bruno</p>
@endif

@for($i = 0; $i < count($array); $i++)
    <p> {{ $array[$i] }} </p> 
@endfor

@php
    $name = 'leandra';
    echo $name;
@endphp
<!-- comentário html -->
{{-- comentario blade --}}

@foreach($names as $name)
    <p>{{ $loop->index }}</p>
    <p>{{ $name }}</p>
@endforeach
@endsection
