@extends('admin.layouts.default.master')
@section('content')
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Статистика</h4>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Добавить профиль</h3>
                </div>
                <div class="col-md-12">
                    <form name="store-new-profile" id="storeNewProfile" method="post" style="max-width: 600px;"
                          action="{{route('admin.profiles.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" id="name" name="name" class="form-control" required="">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 px-5">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <hr>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-4 mb-3">Профили</h3>
                </div>
            </div>
            <div class="row">
                @forelse($user->profiles as $profile)
                    <div class="col-md-3">
                        <a href="{{ route('admin.profiles.show',$profile->id) }}" class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $profile->name }}</h5>
                            </div>
                        </a>
                    </div>
                @empty
                    <h5>Профили не созданы</h5>
                @endforelse
            </div>
        </div>
    </section>

@endsection
