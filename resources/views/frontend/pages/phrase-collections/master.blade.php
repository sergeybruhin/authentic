@extends('frontend.layouts.default.master')
@section('header')
    <section style="background-color: #b8cce1">


        <div class="py-5 text-center container">
            <div class="row pt-lg-5 pb-lg-4">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Словосочетания и фразы</h1>
                    <p>В каждой коллекции фраз может быть разное количество карточек. Для начала рекомендуем взять коллекцию
                        по знакомой ребёнку теме с небольшим количеством карточек и придумать сладкую награду за
                        прохождения всех карточек. </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')

    <section style="background-color: #b8cce1">


        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @forelse($phraseCollections as $phraseCollection)
                    <div class="col">
                        @include('frontend.templates.phrase-collection.preview.master',['phraseCollection' => $phraseCollection])
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
                    {{ $phraseCollections->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
