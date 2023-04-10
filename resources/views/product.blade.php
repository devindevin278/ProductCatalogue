@extends('master')

@section('title', 'Product List')

@section('content')
<div class="list container ">
            @foreach($product as $item)
            @if($item['type'] == 'r')

            <a href="/productdetail?key={{ $item['index'] }}">
                <div class="card" style="background-color: silver; border-color; width: 18rem;";>
                    <img class="card-img-top" src="{{ asset('images/' . $item['index']  . '.jfif' ) }}" alt="">
                    <h3>{{ $item['name'] }}</h3>
                    <p>{{ $item['price'] }}</p>
                    <p>{{ $item['type'] }}</p>

                </div>
            </a>

            @elseif ($item['type'] == 'sr')

            <a href="/productdetail?key={{ $item['index'] }}">
                <div class="card" style="background-color: gold; border-color; width: 18rem;";>
                    <img class="card-img-top" src="{{ asset('images/' . $item['index']  . '.jfif' ) }}" alt="">
                    <h3>{{ $item['name'] }}</h3>
                    <p>{{ $item['price'] }}</p>
                    <p>{{ $item['type'] }}</p>

                </div>
            </a>

            @elseif ($item['type'] == 'ssr')

            <a href="/productdetail?key={{ $item['index'] }}">
                <div class="card" style="background-color: red; border-color; width: 18rem;";>
                    <img class="card-img-top" src="{{ asset('images/' . $item['index']  . '.jfif' ) }}" alt="">
                    <h3>{{ $item['name'] }}</h3>
                    <p>{{ $item['price'] }}</p>
                    <p>{{ $item['type'] }}</p>

                </div>
            </a>

            @endif
            @endforeach
        </div>

@endsection
