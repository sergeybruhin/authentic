@extends('frontend.layouts.default.master')
@section('header')
    <section style="background-color: #b8d9e1">
        <div class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Коллекции</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')

    <section style="background-color: #b8d9e1">


        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @forelse($wordCollections as $wordCollection)
                    <div class="col">
                        @include('frontend.templates.word-collection.preview.master',['wordCollection' => $wordCollection])
                    </div>
                @empty
                    <div class="col">
                        <h3>Нет данных</h3>
                    </div>
                @endforelse
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center my-4">
                <div class="col text-center d-flex justify-content-center">
                    {{ $wordCollections->links() }}
                </div>
            </div>
        </div>
    </section>

@endsection
