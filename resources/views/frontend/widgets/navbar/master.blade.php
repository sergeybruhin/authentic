<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
                <a href="/"><h4 class="text-white">About</h4></a>
                <p class="text-muted">Add some information about the album below, the author, or any other background
                    context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them
                    off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">Contact</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Follow on Twitter</a></li>
                    <li><a href="#" class="text-white">Like on Facebook</a></li>
                    <li><a href="#" class="text-white">Email me</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #fff5ab!important;">
    <div class="container">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <i class="fas fa-angle-double-up me-3"></i>
            <strong style="text-decoration: none;">Authentic</strong>
        </a>
        {{--        <a href="{{ route('words.index') }}" class="text-white">Слова</a>--}}
        {{--        <a href="{{ route('phrases.index') }}" class="text-white">Фразы</a>--}}
        <a href="{{ route('wordCollections.index') }}" class="nav-link text-dark"><i class="fas fa-th-large me-2"></i> Слова</a>
        <a href="{{ route('phraseCollections.index') }}" class="nav-link text-dark"><i class="fas fa-th-list me-2"></i> Фразы</a>
        <a href="{{ route('admin.home') }}" class="nav-link text-dark"><i
                class="fas fa-cog me-2"></i> Админ панель</a>

        <a href="#" style="text-decoration: none;color: #646100d4" class="e-fullscreenToggle" id="fullscreenToggle"><i
                class="fas fa-expand"></i></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


    </div>
</div>
