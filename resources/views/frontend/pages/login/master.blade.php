@extends('admin.layouts.default.master')

@section('content')
    <div class="w-loginForm" style="max-width: 340px;margin:auto">
        <form method="POST" action="{{ route('authenticate') }}" class="form-signin">
            @csrf
            <div class="text-center" style="font-size: 40px;max-width:80px;margin: auto;margin-top: 1rem;font-weight: bold;color: royalblue;background-color: #cbd5e0;border-radius: 8px;">
                <img style="max-width: 100%" src="/apple-touch-icon.png" alt="">
            </div>

            <h1 class="h3 mb-3 font-weight-normal text-center mt-4">Вход</h1>
            <input name="email" type="email" id="inputEmail" class="form-control mb-3" placeholder="Электронная почтав" required=""
                   autofocus="">
            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Пароль"
                   required="">
            <div class="checkbox my-4">
                <label>
                    <input type="checkbox" value="remember-me"> Запомнить на этом
                </label>
            </div>
            <button class="btn btn-primary btn-block w-100" type="submit">Войти</button>
            <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
        </form>
    </div>
@endsection


