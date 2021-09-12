@extends('frontend.layouts.default.master')
@section('header')
    <section class="pt-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <p>Коллекция:</p>
                <h1 class="fw-light">{{ $phraseCollection->name }}</h1>
                <div class="text-center">
                    <a href="{{ route('phraseCollections.showPhrase',[$phraseCollection->id, $phraseCollection->phrases->first()->id]) }}"
                       class="btn btn-lg btn-primary mt-4 py-3 px-5" style="border-radius: 40px">Начать</a>
                </div>
                <div class="text-center pt-5">
                    Количество слов: {{ $phraseCollection->phrases->count() }}
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')

    <div class="container">
        <div class="row">
            @forelse($phraseCollection->phrases as $phrase)
                <div class="col col-2 pb-3">
                    @include('frontend.templates.phrase.preview-static.master', $phrase)
                </div>

            @empty
                <p class="text-center">В коллекции нет слов</p>
            @endforelse
        </div>
@endsection
