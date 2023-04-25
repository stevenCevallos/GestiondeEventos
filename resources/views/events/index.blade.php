
    <h1>Eventos</h1>
    <a href="{{ route('events.create') }}" class="btn btn-primary">Crear evento</a>
    <ul>
        @foreach($events as $event)
            <li>
                <a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a>
            </li>
        @endforeach
    </ul>

