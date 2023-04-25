<h2>Editar evento</h2>

<form action="{{ route('events.update', $event->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nombre:</label>
    <br>
    <input type="text" name="name" id="name" value="{{ old('name', $event->name) }}" required>
    <br>
    <br>
    <label for="location">Ubicación:</label>
    <br>
    <input type="text" name="location" id="location" value="{{ old('location', $event->location) }}" required>
    <br>
    <br>
    <label for="date">Fecha:</label>
    <br>
    <input type="date" name="date" id="date" required>
    <br>
    <br>
    <label for="description">Descripción</label>
    <br>
    <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $event->description) }}</textarea>
    <br>
    <br>
    <button type="submit">Actualizar evento</button>
</form>
