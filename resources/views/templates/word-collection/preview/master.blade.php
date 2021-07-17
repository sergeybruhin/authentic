<a href="{{ route('wordCollections.show', $wordCollection->id) }}" class="card">
    <div class="h2">{{$wordCollection->name}} {{$wordCollection->words()->count()}}</div>
</a>
