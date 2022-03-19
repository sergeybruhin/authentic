<div class="t-wordPreviewStatic">
    @if($word->getFirstMedia('image'))
        <img src="{{ $word->getFirstMedia('image')->getUrl('sm') }}" class="t-wordPreviewStatic__image"
             alt="{{ Str::upper($word->text) }}">
    @endif
    <h5 class="t-wordPreviewStatic__title">{{ Str::upper($word->text) }}</h5>
</div>
