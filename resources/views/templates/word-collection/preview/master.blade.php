<a href="{{ route('wordCollections.show', $wordCollection->id) }}"  class="card bg-dark text-white">
    <img src="{{ $wordCollection->image }}" class="card-img" alt="{{ Str::upper($wordCollection->name) }}">
    <div class="card-img-overlay">
        <h5 class="card-title my-4">{{ Str::upper($wordCollection->name) }}</h5>
    </div>
</a>
