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
        <div class="row">

            @forelse($phrases as $phrase)
                <div class="col-3 pb-3">
                    @include('templates.phrase.preview.master',['phrase' => $phrase])
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
            <div class="col ">
                {{ $phrases->links() }}
            </div>
        </div>
    </div>

@endsection

