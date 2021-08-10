@extends('frontend.layouts.default.master')
@section('header')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                a<h1 class="fw-light">Album example</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>
@endsection
@section('content')

    {{-- СЛОВА--}}
    <div class="container mb-5">
        <div class="row">
            <div class="col">
                <h1>Слова</h1>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @forelse(\App\Models\Word::all() as $word)
                <div class="col">
                    @include('frontend.templates.word.preview.master',['word' => $word])
                </div>
            @empty
                <div class="col">
                    <h3>Нет данных</h3>
                </div>
            @endforelse
        </div>
    </div>


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
