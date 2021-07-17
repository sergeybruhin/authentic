@extends('layouts.default.master')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                @include('widgets.editor.master')
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
                <img class="img-fluid" src="{{ $phrase->image }}" alt="">
                <h4 class="text-center my-3">{{ Str::upper($phrase->text) }}</h4>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="row">
            <div class="col">
                @if($previousPhrase)
                    <a class="btn btn-light btn-lg text-uppercase" href="{{ route('phrases.show', $previousPhrase->id) }}">👈 <span class="mx-2"></span>{{ $previousPhrase->text}}</a>
                @endif
            </div>
            <div class="col text-end">
                @if($nextPhrase)
                    <a class="btn btn-light btn-lg text-uppercase" href="{{ route('phrases.show', $nextPhrase->id) }}">{{ $nextPhrase->text }} 👉</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const phrase = '{{ Str::upper($phrase->text) }}';
        const editor = document.getElementById('editor');
        document.addEventListener('keyup', logKey);

        function logKey(e) {
            if(editor.textContent.toLowerCase() === phrase.toLowerCase()) {
                if(!editor.classList.contains('editor--success')) {
                    editor.classList.add('editor--success')
                }
            }
            if(editor.textContent.toLowerCase() !== phrase.toLowerCase()) {
                if(editor.classList.contains('editor--success')) {
                    editor.classList.remove('editor--success')
                }
            }
            console.log(editor.textContent);
        }
    </script>
@endsection

