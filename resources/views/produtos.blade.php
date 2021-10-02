@extends('layouts.main')
@section('title', 'Produtos')
@section('content')
<h1>Produtos</h1>
@if($search != '')
    <p>sua busca: {{ $search }}</p>
@else
    <p>Busca não encontrada</p>
@endif    
@endsection