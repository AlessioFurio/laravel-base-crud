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
                <a href="{{ route('products.edit', ['product' => $item->id]) }}">Modifica prodotto</a>

                <form class="" action="{{ route('products.destroy', ['product' => $item->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="button">
                        Elimina prodotto
                    </button>
                </form>
            </ul>
        @endforeach

        <a href="{{ route('products.create') }}">Inserisci nuovo prodotto</a>

@endsection
