@extends('layouts.default.master')
@section('header')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <p>Коллекция:</p>
                <h1 class="fw-light">{{ $wordCollection->name }}</h1>
            </div>
        </div>
    </section>
@endsection
@section('content')

    <div class="container">
        <div class="row">
            @forelse($wordCollection->words as $word)
                <div class="col col-3 pb-3">
                    @include('templates.word.preview.master', $word)
                </div>

            @empty
                <p class="text-center">В коллекции нет слов</p>
            @endforelse
    </div>


@endsection
