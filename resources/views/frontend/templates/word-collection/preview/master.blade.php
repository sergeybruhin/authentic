{{--<a href="{{ route('wordCollections.show', $wordCollection->id) }}" class="card bg-dark text-white">--}}
{{--    <img src="{{ $wordCollection->image }}" class="card-img" alt="{{ Str::upper($wordCollection->name) }}">--}}
{{--    <div class="card-img-overlay">--}}
{{--        <h5 class="card-title my-4">{{ Str::upper($wordCollection->name) }}</h5>--}}
{{--    </div>--}}
{{--</a>--}}

<a href="{{ route('wordCollections.show', $wordCollection->id) }}" class="t-wordCollectionPreview">
    <div class="t-wordCollectionPreview__container">
        @forelse($wordCollection->words->take(4) as $word)
            <img src="{{ Storage::disk('images')->url($word->image) }}" class="t-wordCollectionPreview__image"
                 alt="{{ Str::upper($wordCollection->name) }}">
        @empty
        @endforelse
    </div>

    <h5 class="t-wordCollectionPreview__title">{{ Str::upper($wordCollection->name) }}</h5>
    <span class="t-wordCollectionPreview__wordCount">Слов: {{ $wordCollection->words->count() }}</span>
</a>
