@extends('frontend.layouts.default.master')
@section('content')
    @include('frontend.widgets.success-modal.master')
    <div class="container pt-5 pb-4" >
        <div class="row " style="display: flex; flex-wrap: wrap;" >
            <div class="col-lg-6">
                @include('frontend.widgets.editor.master')
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
                <div class="" style="max-height: 78vh;height: 100%">
                    <img class="img-fluid" src="{{ $word->image }}" alt="" style="max-height: 78vh" >
                    <h4 class="text-center my-3">{{ Str::upper($word->text) }}</h4>
                </div>

            </div>
        </div>
    </div>
    <div class="container pb-4">
        <div class="row">
            <div class="col">
                @if($previousWord)
                    <a id="prevButton" class="btn btn-primary btn-lg text-uppercase px-4" style="display: none;border-radius: 20px"
                       href="{{ route('words.show', $previousWord->id) }}">👈 <span class="mx-2"></span> Назад</a>
                @endif
            </div>
            <div class="col text-end">
                @if($nextWord)
                    @if(isset($wordCollection))
                        <a id="nextButton" class="btn btn-primary btn-lg text-uppercase px-4" style="display: none;border-radius: 20px"
                           href="{{ route('wordCollections.showWord', [$wordCollection->id, $nextWord->id]) }}">Вперёд
                            👉</a>
                    @else
                        <a id="nextButton" class="btn btn-primary btn-lg text-uppercase px-4" style="display: none;border-radius: 20px"
                           href="{{ route('words.show', $nextWord->id) }}">Вперёд 👉</a>
                    @endif
                @endif
            </div>
        </div>
        @if(isset($wordCollection))
            <div class="row">
                <div class="col">
                    <div class="text-left text-gray">
                        Коллекция: {{ $wordCollection->name }}
                    </div>
                </div>
            </div>
        @endif
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
            if (editor.textContent.toLowerCase() === word.toLowerCase()) {
                if (!editor.classList.contains('editor--success')) {
                    editor.classList.add('editor--success')
                    editor.contentEditable = false;
                    if (nextButton) {
                        nextButton.style.display = 'inline-block';
                    }
                    if (!nextButton) {
                        successModal.show();
                    }
                }
            }
            if (editor.textContent.toLowerCase() !== word.toLowerCase()) {
                if (editor.classList.contains('editor--success')) {
                    editor.classList.remove('editor--success')
                }
            }
            console.log(editor.textContent);
        }
    </script>
@endsection

@section('styles')
@endsection
