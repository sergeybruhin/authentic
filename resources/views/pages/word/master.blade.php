@extends('layouts.default.master')
@section('content')
    <div class="modal" id="successModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">ОТЛИЧНО!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1>⭐️️⭐️️⭐️️</h1>
                </div>
                <div class="modal-footer text-center">
                    <a href="/" type="button" class="btn btn-primary btn-lg" >НА ГЛАВНУЮ</a>
                </div>
            </div>
        </div>
    </div>
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
    <div class="container pb-4">
        <div class="row">
            <div class="col">
                @if($previousWord)
                    <a id="prevButton" class="btn btn-primary btn-lg text-uppercase" style="display: none" href="{{ route('words.show', $previousWord->id) }}">👈 <span class="mx-2"></span> Назад</a>
                @endif
            </div>
            <div class="col text-end">
                @if($nextWord)
                    <a id="nextButton" class="btn btn-primary btn-lg text-uppercase" style="display: none" href="{{ route('words.show', $nextWord->id) }}">Вперёд 👉</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const word = '{{ Str::upper($word->text) }}';
        const editor = document.getElementById('editor');
        const nextButton = document.getElementById('nextButton');
        const prevButton = document.getElementById('prevButton');
        const successModal = new bootstrap.Modal(document.getElementById('successModal'))
        document.addEventListener('keyup', logKey);

        function logKey(e) {
            if(editor.textContent.toLowerCase() === word.toLowerCase()) {
                if(!editor.classList.contains('editor--success')) {
                    editor.classList.add('editor--success')
                    editor.contentEditable = false;
                    if(nextButton) {
                        nextButton.style.display = 'inline-block';
                    }

                    successModal.show();
                }
            }
            if(editor.textContent.toLowerCase() !== word.toLowerCase()) {
                if(editor.classList.contains('editor--success')) {
                    editor.classList.remove('editor--success')
                }
            }
            console.log(editor.textContent);
        }
    </script>
@endsection

@section('styles')
@endsection
