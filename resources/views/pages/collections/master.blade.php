@extends('layouts.default.master')
@section('header')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Коллекции</h1>
            </div>
        </div>
    </section>
@endsection
@section('content')

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            @forelse($collections as $collection)
                <div class="col">
                    @include('templates.collection.preview.master',['collection' => $collection])
                </div>
            @empty
                <div class="col">
                    <h3>Нет данных</h3>
                </div>
            @endforelse
        </div>

    </div>

@endsection
