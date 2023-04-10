@extends('master')

@section('title')

@section('content')
    <div class="d-flex ">
        <div class="card w-25" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('images/' . $product[$key-1]['index']  . '.jfif' ) }}" alt="">
            <h3>{{ $product[$key-1]['name'] }}</h3>
            <p>{{ $product[$key-1]['price'] }}</p>
            <p>{{ $product[$key-1]['type'] }}</p>
        </div>

        <div class="w-50" >
            <p class="fs-3">{{ $product[$key-1]['desc'] }}</p>
            <a class="btn btn-primary" href="#">Buy Now</a>
        </div>
    </div>

@endsection
