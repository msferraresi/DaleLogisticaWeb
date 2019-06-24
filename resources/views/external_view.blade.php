@extends('base_view')

@section('title')
    @yield('title_ev')
@endsection
@section('cabecera')
    <div class="header">
        @yield('cabecera_ev')
    </div>
@endsection
@section('aside_izq')
    
@endsection
@section('contenido')
    <div class="container">
        @yield('contenido_ev')
    </div>
@endsection
@section('aside_der')
    
@endsection
@section('piepagina')
    
@endsection