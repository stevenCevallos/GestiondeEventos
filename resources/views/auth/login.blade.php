
<h1>Login</h1>
<form action="{{ route('login.submit') }}" method="post">
    @csrf
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
    <button type="submit">Iniciar sesión</button>
</form>

