@extends('master')

@section('title', 'Product detail')

@section('content')
    <div class="container ps-5 d-flex">

        @if ($product[$key-1]['type'] == 'R')
            <div class="card p-3 ms-5" style="width: 20rem; background-color: silver;">

                @elseif ($product[$key-1]['type'] == 'SR')
                <div class="card p-3 ms-5" style="width: 20rem; background-color: gold;">

                    @elseif ($product[$key-1]['type'] == 'SSR')
                    <div class="card p-3 ms-5" style="width: 20rem; background-color: red;">
        @endif


            <img class="card-img-top" src="{{ asset('images/' . $product[$key-1]['index']  . '.jfif' ) }}" alt="">
            <h3>{{ $product[$key-1]['name'] }}</h3>
            <p class="fs-2">{{ "Rp. " . $product[$key-1]['price'] .",-" }}</p>
            <p class="fs-4">{{ "Type: " . $product[$key-1]['type'] }}</p>
        </div>

        <div class="container desc w-50" >
            <p class="text fs-5">{{ $product[$key-1]['desc'] }}</p>
            <a class="btn fs-4 btn-primary" href="#">Buy Now</a>
        </div>
    </div>

@endsection
