<a href="{{ route('words.show', $word->id) }}" class="card shadow-sm">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img"
         aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>{{ Str::upper($word->text) }}</title>
        <rect width="100%" height="100%" fill="#55595c"/>
        <text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ Str::upper($word->text) }}</text>
    </svg>
</a>
