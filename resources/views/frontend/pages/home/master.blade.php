@extends('frontend.layouts.default.master')
@section('header')
    <section class="py-5 text-center" style="background-color: #fff;">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Учимся писать буквы и слова</h1>
                    <h2 class="lead text-muted">Простой и удобный тренажёр печати на компьютере для детей со сложностями
                        восприятия речи</h2>
                    <p>
                        <a href="{{ route('wordCollections.index') }}" class="btn btn-lg btn-primary my-2 px-5 me-4"
                           style="border-radius: 40px;">Слова</a>
                        <a href="{{ route('phraseCollections.index') }}" class="btn btn-lg btn-secondary my-2 px-5"
                           style="border-radius: 40px;">Фразы</a>
                    </p>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('content')

    {{-- СЛОВА--}}
    <section class="pb-4" style="background-color: #b8d9e1">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col mx-auto text-center" style="max-width: 600px">
                    <h3 class=" h1" style="color: #0e6283">Слова</h3>
                    <p class="mb-5">Первым делом можно попробовать дать ребёнку печатать коллекции слов. За каждое успешно
                        пройденное испытание рекомендуем дать сладость или другую награду.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @forelse(\App\Models\WordCollection::withCount('words')->orderByDesc('words_count')->take(6)->get() as $wordCollection)
                    <div class="col-4">
                        @include('frontend.templates.word-collection.preview.master',['wordCollection' => $wordCollection])
                    </div>
                @empty
                    <div class="col">
                        <h3>Нет данных</h3>
                    </div>
                @endforelse
            </div>
        </div>
    </section>



    {{-- ФРАЗЫ--}}
    <section class="pb-4" style="background-color: #b8cce1">
        <div class="container py-5">
            <div class="row text-center">
                <div class="col text-center m-auto" style="max-width: 600px">
                    <h3 class=" h1" style="color: #0e6283">Словосочетания и фразы</h3>
                    <p class="mb-5">Как только освоитесь с нашим простым интерфейсом и ручки привыкнут к клавиатуре, попробуйте печатать более сложные сочетания слов. </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @forelse(\App\Models\PhraseCollection::withCount('phrases')->orderByDesc('phrases_count')->take(6)->get() as $phraseCollection)
                    <div class="col-4">
                        @include('frontend.templates.phrase-collection.preview.master',['phraseCollection' => $phraseCollection])
                    </div>
                @empty
                    <div class="col">
                        <h3>Нет данных</h3>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection
