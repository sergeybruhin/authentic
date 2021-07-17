<a href="{{ route('tags.show', $tag->id) }}"  class="btn btn-secondary btn-sm">
{{--    <img src="{{ $tag->image }}" class="card-img" alt="{{ Str::upper($tag->name) }}">--}}
        <span class="card-title my-4">{{ Str::upper($tag->name) }}</span>
</a>
