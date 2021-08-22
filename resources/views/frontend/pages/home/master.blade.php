@extends('frontend.layouts.default.master')
@section('header')
    <section class="py-5 text-center" style="background-color: #d9bc55;background-image: url('https://unsplash.com/photos/4-4WPFLVhAY/1280x448')">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Учимся писать</h1>
                    <p class="lead text-muted">Простой и удобный тренажёр печати на комьютере для детей со сложностями восприятия речи</p>
                    <p>
                        <a href="{{ route('wordCollections.index') }}" class="btn btn-lg btn-primary my-2 px-5 me-4" style="border-radius: 40px;">Слова</a>
                        <a href="{{ route('wordCollections.index') }}" class="btn btn-lg btn-secondary my-2 px-5" style="border-radius: 40px;">Фразы</a>
                    </p>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('content')

    {{-- СЛОВА--}}
    <section class="pb-4" style="background-color: #b8d9e1">
        <div class="container py-5" >
            <div class="row">
                <div class="col text-center">
                    <h1 class="mb-5" style="color: #0e6283">Слова</h1>
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



    <div class="container">

        <div class="row">
            <div class="col">
                <h1>Фразы</h1>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            @forelse(\App\Models\Phrase::all() as $phrase)
                <div class="col">
                    @include('frontend.templates.phrase.preview.master',['phrase' => $phrase])
                </div>
            @empty
                <div class="col">
                    <h3>Нет данных</h3>
                </div>
            @endforelse
        </div>

    </div>

@endsection
