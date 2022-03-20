<div class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #fff5ab!important;">
    <div class="container">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <i class="fas fa-angle-double-up me-3"></i>
            <strong style="text-decoration: none;">Authentic</strong>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('admin.home') }}" class="nav-link px-2 link-secondary">Панель</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Мои Коллекции</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Мои Слова</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Мои Фразы</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Мои Предложения</a></li>
        </ul>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 link-dark" style="font-weight: bold!important;">На сайт</a></li>
        </ul>
        @include('common.widgets.navbar-user.master')

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


    </div>
</div>
