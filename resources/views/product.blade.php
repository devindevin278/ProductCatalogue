@extends('master')

@section('title', 'Product List')

@section('content')
<h2 class="text-center">Find your dream wibu stuff here</h2>
    <div class="container list">
            @foreach($product as $item)

            <a class="" href="/productdetail?key={{ $item['index'] }}">

            @if($item['type'] == 'R')

                <div class="card d-block mx-3 p-3" style="background-color: silver; border-color; width: 18rem;";>

            @elseif ($item['type'] == 'SR')

                <div class="card d-block mx-3 p-3" style="background-color: gold; border-color; width: 18rem;";>

            @elseif ($item['type'] == 'SSR')

                    <div class="card d-block mx-3 p-3" style="background-color: red; border-color; width: 18rem;";>

            @endif

                    <div class="crop">
                        <img class="card-img-top" src="{{ asset('images/' . $item['index']  . '.jfif' ) }}" alt="">
                    </div>
                    <h3 class="fs-5">{{ $item['name'] }}</h3>
                    <p class="fs-4">{{ "Rp." . $item['price'] . ",-" }}</p>
                    <p>{{ "Type: " . $item['type'] }}</p>

                </div>
            </a>


            @endforeach
        </div>

@endsection
