<a href="{{ route('phrases.show', $phrase->id) }}" class="t-phrasePreview">
    <img src="{{ asset($phrase->image) }}" class="t-phrasePreview__image" alt="{{ Str::upper($phrase->text) }}">
    <h5 class="t-phrasePreview__title">{{ Str::upper($phrase->text) }}</h5>
</a>
