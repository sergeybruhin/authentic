<div class="t-phrasePreviewStatic">
    @if($phrase->getFirstMedia('image'))
    <img src="{{  $phrase->getFirstMedia('image')->getUrl('sm') }}" class="t-phrasePreviewStatic__image"
         alt="{{ Str::upper($phrase->text) }}">
    @endif

    <h5 class="t-phrasePreviewStatic__title">{{ Str::upper($phrase->text) }}</h5>
</div>
