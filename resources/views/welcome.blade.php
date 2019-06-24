@extends('external_view')

@section('title_ev', 'Bienvenidos')

@section('cabecera_ev')                        
    <div class="col-md-12 text-right">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
@endsection

@section('contenido_ev') 
    <div class="flex-center position-ref full-height" style=" align-items: center; display: flex; justify-content: center; height: 100vh; position: relative;">   
        <div class="content" style="text-align: center;">                                                
            <div style="margin-bottom: 30px; font-size: 84px;">
                Laravel
            </div>
            <div class="col-md-12 text-center">
                <a class="btn btn-primary" href="https://laravel.com/docs">Docs</a>
                <a class="btn btn-primary" href="https://laracasts.com">Laracasts</a>
                <a class="btn btn-primary" href="https://laravel-news.com">News</a>
                <a class="btn btn-primary" href="https://blog.laravel.com">Blog</a>
                <a class="btn btn-primary" href="https://nova.laravel.com">Nova</a>
                <a class="btn btn-primary" href="https://forge.laravel.com">Forge</a>
                <a class="btn btn-primary" href="https://github.com/laravel/laravel">GitHub</a>
            </div>                
        </div>
    </div>
@endsection

