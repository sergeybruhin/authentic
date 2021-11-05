<div class="t-wordPreviewStatic">
    <img src="{{ Storage::disk('images')->url($word->image) }}" class="t-wordPreviewStatic__image" alt="{{ Str::upper($word->text) }}">
    <h5 class="t-wordPreviewStatic__title">{{ Str::upper($word->text) }}</h5>
</div>
