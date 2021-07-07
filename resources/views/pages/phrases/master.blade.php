@extends('layouts.default.master')
@section('header')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Фразы</h1>
            </div>
        </div>
    </section>
@endsection
@section('content')

    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            @forelse($phrases as $phrase)
                <div class="col">
                    @include('templates.phrase.preview.master',['phrase' => $phrase])
                </div>
            @empty
                <div class="col">
                    <h3>Нет данных</h3>
                </div>
            @endforelse
        </div>

    </div>

@endsection
