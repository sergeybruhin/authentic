@extends('layouts.default.master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                @include('widgets.editor.master')
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
                <img class="img-fluid" src="{{ $word->image }}" alt="">
                <h4 class="text-center my-3">{{ Str::upper($word->text) }}</h4>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="row">
            <div class="col">
                @if($previousWord)
                    <a class="btn btn-light btn-lg text-uppercase" href="{{ route('words.show', $previousWord->id) }}">👈 <span class="mx-2"></span>{{ $previousWord->text}}</a>
                @endif
            </div>
            <div class="col text-end">
                @if($nextWord)
                    <a class="btn btn-light btn-lg text-uppercase" href="{{ route('words.show', $nextWord->id) }}">{{ $nextWord->text }} 👉</a>
                @endif
            </div>
        </div>
    </div>
@endsection
