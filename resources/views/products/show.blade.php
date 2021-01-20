@extends('layouts.app')

@include('partials.header')

@section('content')
    <h1>Descrizione prodotto {{ $product->id }}</h1>
    <p>{{ $product->description }}</p>
@endsection
