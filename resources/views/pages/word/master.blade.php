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
@endsection
