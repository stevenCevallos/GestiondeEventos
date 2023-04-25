
    <h1>Evento:  {{ $event->name }} </h1>
    
    <p>id_evento: {{ $event->id }}</p>
    <p>id_user: {{ $event->user_id }}</p>
    <p>Nombre: {{ $event->name }}</p>
    <p>Ubicación: {{ $event->location }}</p>
    <p>Fecha: {{ $event->date }}</p>
    <p>Descripción: {{ $event->description }}</p>
    

    <a href="{{ route('events.edit', $event->id) }}">Editar evento</a>

