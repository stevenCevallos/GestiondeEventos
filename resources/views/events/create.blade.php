<h1>Crear evento</h1>
<form action="{{ route('events.store') }}" method="post">
    @csrf
    <div>
        <label for="name">name</label>
        <input type="text" id="name" name="name" required>
    </div>
    <br>
    <div>
        <label for="location">Ubicación</label>
        <input type="text" id="location" name="location" required>
    </div>
    <br>
    <div>
        <label for="date">Fecha</label>
        <input type="date" id="date" name="date" required>
    </div>

    <div>
        <label for="description">Descripción:</label>
        <br>
        <textarea name="description" id="description" rows="5" class="form-control" required></textarea>

    </div>
    <br>
    <button type="submit" class="btn btn-primary">Crear evento</button>
</form>