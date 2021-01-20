@extends('layouts.app')

@include('partials.header')
@section('content')
    <h1>Tutti i prodotti</h1>
        @foreach ($prodotti as $item)
            <ul>
                <h1>{{ $item->brand }}</h1>
                <li>{{ $item->size }}</li>
                <li>{{ $item->color }}</li>
                <li>{{ $item->price }}</li>
                <a href="{{ route('products.show', ['product' => $item->id]) }}">Mostra Dettagli</a>
            </ul>
        @endforeach
@endsection
