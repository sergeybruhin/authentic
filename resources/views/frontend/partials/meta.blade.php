{{--<meta charset="UTF-8">--}}
{{--<meta name='viewport'--}}
{{--      content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>--}}

{{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--<meta name="robots" content="index,follow"/>--}}

{{--<meta name="language" content="{{ app()->getLocale() }}"/>--}}
{{--<meta name="copyright" content="© 2022 {{ config('app.name') }}"/>--}}

{{--@include('public.layouts.partials.favicons')--}}


{{--@if(!isset($metaTitle) && !isset($seoMeta))--}}

{{--    @if(isset($compilation))--}}
{{--        <title>{{ $compilation->meta_title ?? $compilation->title}}</title>--}}
{{--        <meta name="description"--}}
{{--              content="{{ $compilation->meta_description ?? \Illuminate\Support\Str::limit(strip_tags($compilation->description), 157) }}">--}}
{{--    @endif--}}

{{--    @if(isset($page))--}}
{{--        <title>{{ $page->meta_title ?? $page->title}}</title>--}}
{{--        <meta name="description"--}}
{{--              content="{{ $page->meta_description ?? \Illuminate\Support\Str::limit(strip_tags($page->description)) ?? $page->subtitle }}">--}}
{{--    @endif--}}

{{--    @if(!isset($page) && isset($base))--}}
{{--        <title>{{ 'SUPER.CAMP — ' . ($base->meta_title ?? $base->name)}}</title>--}}
{{--        <meta name="description"--}}
{{--              content="{{ $base->meta_description ?? \Illuminate\Support\Str::limit(strip_tags($base->description), 157) }}">--}}
{{--        <meta name="twitter:description"--}}
{{--              content="{{ $base->meta_description ?? \Illuminate\Support\Str::limit(strip_tags($base->description), 157) }}">--}}
{{--    @endif--}}

{{--@elseIf(isset($seoMeta))--}}
{{--    <title>{{ $seoMeta->metaTitle}}</title>--}}
{{--    <meta name="description" content="{{ $seoMeta->description }}">--}}
{{--    <meta name="twitter:description" content="{{ $seoMeta->description }}">--}}
{{--@else--}}
{{--    <title>{{ $metaTitle}}</title>--}}
{{--@endif--}}


{{--<meta name="apple-mobile-web-app-capable" content="yes">--}}
{{--<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">--}}

{{--@include('public.layouts.partials.webmaster-yandex')--}}

{{--<meta name="image" content="{{ asset('supercamp-preview.jpg') }}">--}}
{{--<link rel="yandex-tableau-widget" href="{{asset('yandex-tableau-widget.json')}}"/>--}}


{{--<!-- CSRF Token -->--}}
{{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

