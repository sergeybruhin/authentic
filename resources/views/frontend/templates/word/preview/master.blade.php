<a href="{{ route('words.show', $word->id) }}" class="t-wordPreview">

    @if($word->getFirstMedia('image'))
        <img src="{{ $word->getFirstMedia('image')->getUrl('sm') }}" class="t-wordPreview__image"
             alt="{{ Str::upper($word->text) }}">
    @endif

    <h5 class="t-wordPreview__title">{{ Str::upper($word->text) }}</h5>
</a>
