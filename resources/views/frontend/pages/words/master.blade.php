@extends('frontend.layouts.default.master')
@section('header')
    <section class="py-5 text-center container">
        <div class="row py-lg-2">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Слова</h1>
            </div>
        </div>
    </section>
@endsection
@section('content')

    <div class="container">
        <div class="row">

            @forelse($words as $word)
                <div class="col-3 pb-3">
                    @include('frontend.templates.word.preview.master',['word' => $word])
                </div>
            @empty
                <div class="col-3">
                    <h3>Нет данных</h3>
                </div>
            @endforelse
        </div>

    </div>
    <div class="container">
        <div class="row align-items-center my-4">
            <div class="col ">
                {{ $words->links() }}
            </div>
        </div>
    </div>

@endsection
