<div class="t-phrasePreviewStatic">
    <img src="{{  Storage::disk('images')->url($phrase->image) }}" class="t-phrasePreviewStatic__image"
         alt="{{ Str::upper($phrase->text) }}">
    <h5 class="t-phrasePreviewStatic__title">{{ Str::upper($phrase->text) }}</h5>
</div>
