@extends('layouts.app')

@include('partials.header')
@section('content')
    <h1>Form inserimento nuovo prodotto</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="">
            <label>Brand</label>
            <input type="text" name="brand">
        </div>
        <div class="">
            <label>Size</label>
            <select class="" name="size">
                <option value="">--seleziona genere--</option>
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
        </div>
        <div class="">
            <label>Color</label>
            <input type="text" name="color">
        </div>
        <div class="">
            <label>Price</label>
            <input type="number" name="price">
        </div>
        <div class="">
            <label>Description</label>
            <input type="text" name="description">
        </div>

        <button type="submit">Submit</button>
    </form>

@endsection
