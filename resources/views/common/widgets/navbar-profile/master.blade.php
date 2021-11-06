@if(isset($selectedProfile))
    <a href="{{ route('admin.profiles.show', $selectedProfile->id)}}" class="nav-link text-dark"><i
            class="fas fa-user me-2"></i>
        {{ $selectedProfile->name }}</a>
@endif
