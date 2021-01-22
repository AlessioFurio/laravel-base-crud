@extends('layouts.app')

@include('partials.header')
@section('content')
    <h1>Form modifica prodotto</h1>

    <form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
        @csrf
        @method('PUT')
        <div class="">
            <label>Brand</label>
            <input type="text" name="brand" value="{{ $product->brand }}">
        </div>
        <div class="">
            <label>Size</label>
            <select class="" name="size">
                <option value="">--seleziona genere--</option>
                <option {{ $product->size == 'small' ? 'selected="selected"' : '' }} value="small">small</option>
                <option {{ $product->size == 'medium' ? 'selected="selected"' : '' }} value="medium">medium</option>
                <option {{ $product->size == 'large' ? 'selected="selected"' : '' }} value="large">large</option>
            </select>
        </div>
        <div class="">
            <label>Color</label>
            <input type="text" name="color" value="{{ $product->color }}">
        </div>
        <div class="">
            <label>Price</label>
            <input type="number" name="price" value="{{ $product->price }}">
        </div>
        <div class="">
            <label>Description</label>
            <input type="text" name="description" value="{{ $product->description }}">
        </div>

        <button type="submit">Submit</button>
    </form>

@endsection
