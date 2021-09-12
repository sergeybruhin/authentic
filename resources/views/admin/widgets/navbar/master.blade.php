<div class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #fff5ab!important;">
    <div class="container">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <i class="fas fa-angle-double-up me-3"></i>
            <strong style="text-decoration: none;">Authentic</strong>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Панель</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Коллекции</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Слова</a></li>
        </ul>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 link-dark" style="font-weight: bold!important;">Сайт</a></li>
        </ul>
        @if(isset($user))
            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    <span class="mx-2"> {{ $user->name }}</span>

                </a>


                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                    <li><a class="dropdown-item" href="{{ route('admin.settings') }}">Настройки</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    @forelse($user->profiles as $profile)
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.profiles.show', $profile->id) }}">{{ $profile->name }}</a>
                        </li>
                    @empty
                        <li><span class="dropdown-item">Нет профилей</span></li>
                    @endforelse
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="lni lni-exit"></i> Выйти</button>
                        </form>
                        {{--                    <a class="dropdown-item" href="#">Выйти</a>--}}
                    </li>
                </ul>


            </div>
        @endif

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


    </div>
</div>
