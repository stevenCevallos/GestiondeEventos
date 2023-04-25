
<h1>Registro</h1>

<body>
    <form action="{{ route('register.submit') }}" method="post">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <br>
            <input type="text" id="name" name="name" required>
        </div>
        <br>
        <div>
            <label for="email">Correo electrónico</label>
            <br>
            <input type="email" id="email" name="email" required>
        </div>
        <br>
        <div>
            <label for="password">Contraseña</label>
            <br>
            <input type="password" id="password" name="password" required>
        </div>
        <br>
        <div>
            <label for="password_confirmation">Confirmar contraseña</label>
            <br>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <br>
        <button type="submit">Registrarse</button>
    </form>
</body>