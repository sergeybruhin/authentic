{{--<a href="{{ route('phraseCollections.show', $phraseCollection->id) }}" class="card bg-dark text-white">--}}
{{--    <img src="{{ $phraseCollection->image }}" class="card-img" alt="{{ Str::upper($phraseCollection->name) }}">--}}
{{--    <div class="card-img-overlay">--}}
{{--        <h5 class="card-title my-4">{{ Str::upper($phraseCollection->name) }}</h5>--}}
{{--    </div>--}}
{{--</a>--}}

<a href="{{ route('phraseCollections.show', $phraseCollection->id) }}" class="t-phraseCollectionPreview">
    <div class="t-phraseCollectionPreview__container">
        @forelse($phraseCollection->phrases->take(4) as $phrase)
            @if($phrase->getFirstMedia('image'))
                <img src="{{ $phrase->getFirstMedia('image')->getUrl('sm')}}" class="t-phraseCollectionPreview__image"
                     alt="{{ Str::upper($phraseCollection->name) }}">
            @endif
        @empty
        @endforelse
    </div>

    <h5 class="t-phraseCollectionPreview__title">{{ Str::upper($phraseCollection->name) }}</h5>
    <span class="t-phraseCollectionPreview__phraseCount">Фраз: {{ $phraseCollection->phrases->count() }}</span>
</a>
