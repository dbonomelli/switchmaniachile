@extends('components.layout')

@section('title', 'Bienvenidos')

@section('styles')
    <link href="{{asset('css/main-page.css')}}" rel="stylesheet">
@endsection
    
@section('content')
    <div class="container">
        <div class="searchbar-holder row justify-content-center input-group">
            <div class="col-md-2">
                <input class="form-control" name="search-bar" type="text" placeholder="Buscar...">
            </div>
        </div>
        <div class="row" style="flex-direction: row">
            <div class="title-top">
                <h1>Nintendo Switch</h1>
                <h1>Ver todo</h1>
            </div>
        </div>
        <div class="row justify-content-between">
            @for ($i = 0; $i<5; $i++)
                <x-card></x-card>
            @endfor

        </div>
        <div class="separation"></div>
        <div class="row justify-content-between">
            <div class="title-top">
                <h1>Playstation</h1>
                <h1>Ver todo</h1>
            </div>
            @for ($i = 0; $i<5; $i++)
            <x-card></x-card>
            @endfor
        </div>
        <div class="separation"></div>
        <div class="row justify-content-between">
            <div class="title-top">
                <h1>Steam</h1>
                <h1>Ver todo</h1>
            </div>
            @for ($i = 0; $i<5; $i++)
            <x-card></x-card>
            @endfor
        </div>
        <div class="separation"></div>
        <div class="row justify-content-between">
            <div class="title-top">
                <h1>Plataformas Streaming</h1>
                <h1>Ver todo</h1>
            </div>
            @for ($i = 0; $i<5; $i++)
            <x-card></x-card>
            @endfor
        </div>
    </div>
    

@endsection