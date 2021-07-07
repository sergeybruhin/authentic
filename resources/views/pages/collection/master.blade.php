@extends('layouts.default.master')
@section('header')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <p>Коллекция:</p>
                <h1 class="fw-light">{{ $collection->name }}</h1>
            </div>
        </div>
    </section>
@endsection
@section('content')

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <p>Контент</p>
        </div>
    </div>

@endsection
