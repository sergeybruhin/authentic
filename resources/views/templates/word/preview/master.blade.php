<a href="{{ route('words.show', $word->id) }}"  class="card bg-dark text-white">
    <img src="{{ $word->image }}" class="card-img" alt="{{ Str::upper($word->text) }}">
    <div class="card-img-overlay">
        <h5 class="card-title my-4">{{ Str::upper($word->text) }}</h5>
    </div>
</a>
