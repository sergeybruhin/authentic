<a href="{{ route('words.show', $word->id) }}" class="t-wordPreview">
    <img src="{{ Storage::disk('images')->url($word->image) }}" class="t-wordPreview__image" alt="{{ Str::upper($word->text) }}">
    <h5 class="t-wordPreview__title">{{ Str::upper($word->text) }}</h5>
</a>
