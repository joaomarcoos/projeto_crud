@extends('layout.main')

@section('title', $event->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        
        <div class="col-md-6">
            <div id="image-container">
                <img src="/image/events/{{ $event->image }}" class="img-fluid" alt=" {{ $event->title }}">
            </div>
        </div>

        <div id="info-container" class="col-md-6">
            <h1>{{ $event->title}} </h1>
            <p class="event-city"> <ion-icon name="location-outline"></ion-icon> {{ $event->city }}</p>
            <p class="event-participants"> <ion-icon name="people-outline"></ion-icon> {{ count($event->users) }}</p>
            <p class="event-owner"> <ion-icon name="star-outline"></ion-icon> {{ $eventOwner['name'] }}</p>

            <h3>O evento conta com:</h3>
            <ul  id="item-list">
                @foreach ($event->itens as $item)
                    <li><ion-icon name="play-outline"></ion-icon> <span>{{ $item }} </span> </li>
                @endforeach
            </ul>

            @csrf
            <form action="/events/join/{{$event->id}}" method="POST">
                <a 
                href="/events/join/{{$event->id}}" 
                class="btn btn-primary" 
                id="event-submit"
                onclick="event.preventDefault();
                this.closest('form').submit();"> 
                Confimar presença
            </a>
            </form>
            
        </div>

        <div class="col-md-12" id="description-container">
            <h3>Sobre o evento</h3>
            <p class="event-decription"> {{ $event->description }}</p>
        </div>
    </div>
</div>
@endsection