@extends('app')

@section('container')

    @include('partials._header__main')

    <div class="content">
        @yield('content')
    </div>

    @include('partials._footer__main')

@endsection