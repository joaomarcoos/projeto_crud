@extends('layout.main')

@section('content')
    </head>
    <body class="container-fluid">
        <div id="search-container" class="col-md-12">
            <h1>Busque um evento</h1>
             
            <form action="/" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
            </form>
        </div>

        <div id="events-container" class="col-md-12">

            @if ($search)
                <h2>Buscando por: {{ $search }}</h2>
            @else
                <h2>Próximos eventos</h2>
                <p class="sub-title">Veja os eventos dos próximos dias</p>
            @endif
            
            <div id="cards-container" class="row">
                @foreach ($events as $event)
                    <div class="card col-md-6">
                        <img src="/image/events/{{$event->image}}" alt="{{$event->tile}}">
                        <div class="card-body">
                            <p class="card-date">{{ \Carbon\Carbon::parse($event->dt_event)->format('d/m/Y') }}</p>
                            <h5 class="card-title">{{ $event->title}}</h5>
                            <p>{{ $event->city}}</p>
                            <p class="card-participants">X participantes</p>
                            <a href="/events/{{$event->id}}" class="btn btn-primary"> Saber mais</a>
                        </div>
                    </div>
                @endforeach

                @if (count($events) == 0 && $search)
                    <p class="caso-not-events">Não foi possível encontrar nenhum evento com {{ $search }}!</p>
                @endif
            </div>
        </div>
    </body>
@endsection