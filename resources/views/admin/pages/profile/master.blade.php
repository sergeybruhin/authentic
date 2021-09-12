@extends('admin.layouts.default.master')
@section('content')
    <section class="py-4">


        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Управление профилями</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>{{ $profile->name }}</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
