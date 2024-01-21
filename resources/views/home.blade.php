@extends('layouts.app')

@section('content')
    <!-- JUMBOTRON IMG -->
    <div class="box-jumbotron-img">
        <img class="jumbotron-img" src="{{ asset('/imgs/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container label-container">
        <div class="box-label bg-blue d-inline-block">
            <h3 class="m-0">CURRENT SERIES</h3>
        </div>
    </div>

    <!-- MAIN CARDS -->
    <div class="container">
        <div class="d-flex row row-cols-6 g-4 pt-5">
            @foreach ($dati as $card)
                <div class="card card-box">
                    <img src="{{ $card['thumb'] }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-white">{{ $card['series'] }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container text-center">
        <div class="box-label bg-blue d-inline-block">
            <h3 class="m-0">LOAD MORE</h3>
        </div>
    </div>
@endsection

