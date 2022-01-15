@extends('layouts.main')

@section('title', 'Dell Eventos')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar..." > 
    </form>
</div>
<div id="events-container" class="col md-12">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os próximos eventos</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">27/09/2021</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>    
</div>   

    <!-- Comentário do HTML aparece no console -->
    {{-- Comentário do Blade, não aparece no console --}}

@endsection        