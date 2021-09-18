@if(!isset($authUser) && !\Illuminate\Support\Facades\Route::currentRouteNamed('login'))
    <a href="{{ route('admin.home') }}" class="nav-link text-dark"><i
            class="fas fa-sign-in-alt me-2"></i> Войти</a>
@endif
@if(isset($authUser))
    <div class="dropdown text-end">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
           data-bs-toggle="dropdown" aria-expanded="false">
            <span class="w-navbarProfile__avatar">
{{--                  <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" >--}}
            </span>

            <span class="mx-2"> {{ $authUser->name }}</span>

        </a>


        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
            <li><a class="dropdown-item" href="{{ route('admin.settings') }}">Настройки</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            @forelse($authUser->profiles as $profile)
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
