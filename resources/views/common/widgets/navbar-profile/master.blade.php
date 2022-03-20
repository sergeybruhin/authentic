@if(isset($selectedProfile))
    <a href="{{ route('admin.profiles.show', $selectedProfile->id)}}" class="nav-link text-dark">
        @if($selectedProfile->getFirstMedia('avatar'))
            <img style="width: 25px;height: 25px;" class="rounded-circle mx-2" src="{{ $selectedProfile->getFirstMedia('avatar')->getUrl('sm') }}" alt="">
        @else
             <i class="fas fa-user me-2"></i>
        @endif
        {{ $selectedProfile->name }}</a>
@endif
