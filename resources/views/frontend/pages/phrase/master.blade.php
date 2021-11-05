@extends('frontend.layouts.default.master')
@section('content')
    <section style="background-color: #b8cce1">


        @include('frontend.widgets.success-modal.master',['redirectRoute' => 'phraseCollections.index'])
        <div class="container pt-5 pb-4">
            <div class="row " style="display: flex; flex-wrap: wrap;">
                <div class="col-lg-6">
                    @include('frontend.widgets.editor.master')
                </div>
                <div class="col-10 col-sm-8 col-lg-6">
                    <div class="" style="max-height: 78vh;height: 100%">
                        <img class="img-fluid" src="{{ Storage::disk('images')->url($phrase->image) }}" alt="" style="max-height: 78vh">
                        <h4 class="text-center my-3">{{ Str::upper($phrase->text) }}</h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="container pb-4">
            <div class="row">
                <div class="col">
                    @if($previousPhrase)
                        <a id="prevButton" class="btn btn-primary btn-lg text-uppercase px-4"
                           style="display: none;border-radius: 20px"
                           href="{{ route('phrases.show', $previousPhrase->id) }}">👈 <span class="mx-2"></span>
                            Назад</a>
                    @endif
                </div>
                <div class="col text-end">
                    @if($nextPhrase)
                        @if(isset($phraseCollection))
                            <a id="nextButton" class="btn btn-primary btn-lg text-uppercase px-4"
                               style="display: none;border-radius: 20px"
                               href="{{ route('phraseCollections.showPhrase', [$phraseCollection->id, $nextPhrase->id]) }}">Вперёд
                                👉</a>
                        @else
                            <a id="nextButton" class="btn btn-primary btn-lg text-uppercase px-4"
                               style="display: none;border-radius: 20px"
                               href="{{ route('phrases.show', $nextPhrase->id) }}">Вперёд 👉</a>
                        @endif
                    @endif
                </div>
            </div>
            @if(isset($phraseCollection))
                <div class="row">
                    <div class="col">
                        <div class="text-left text-gray">
                            Коллекция: {{ $phraseCollection->name }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <audio id="successPhraseSound" src="/storage/sounds/success-phrase.mp3" preload="auto"></audio>
        <audio id="successCollectionSound" src="/storage/sounds/success-collection.wav" preload="auto"></audio>
        @if($phrase->audio)
            <audio id="phraseVoiceover" src="{{ $phrase->audio }}" preload="auto"></audio>
        @endif
    </section>
@endsection

@section('scripts')
    <script>
        successPhraseSound = document.getElementById('successPhraseSound');
        successCollectionSound = document.getElementById('successCollectionSound');
        phraseVoiceover = document.getElementById('phraseVoiceover');

        const playSuccessPhrase = function () {
            successPhraseSound.play();
        };
        const playSuccessCollection = function () {
            successCollectionSound.play();
        }
        const playPhraseVoiceover = function () {
            if (phraseVoiceover) {
                setTimeout(function () {
                    phraseVoiceover.play();
                }, 100)

            }
        }

        const phrase = '{{ Str::upper($phrase->text) }}';
        const editor = document.getElementById('editor');
        const nextButton = document.getElementById('nextButton');
        const prevButton = document.getElementById('prevButton');
        const successModal = new bootstrap.Modal(document.getElementById('successModal'))
        document.addEventListener('keyup', logKey);

        function logKey(e) {
            if (editor.textContent.toLowerCase() === phrase.toLowerCase()) {
                if (!editor.classList.contains('editor--success')) {
                    editor.classList.add('editor--success')
                    editor.contentEditable = false;
                    if (nextButton) {
                        nextButton.style.display = 'inline-block';
                        playSuccessPhrase();
                        playPhraseVoiceover();
                    }
                    if (!nextButton) {
                        successModal.show();
                        playSuccessCollection();

                    }

                }
            }
            if (editor.textContent.toLowerCase() !== phrase.toLowerCase()) {
                if (editor.classList.contains('editor--success')) {
                    editor.classList.remove('editor--success');
                }
            }
            console.log(editor.textContent);
        }
    </script>
@endsection

@section('styles')
@endsection
