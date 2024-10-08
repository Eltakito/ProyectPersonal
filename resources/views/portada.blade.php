<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        html {
            background-image: url("{{ asset('images/index.png') }}");
            background-size: cover; /* Ajuste para cubrir toda la pantalla */
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: rgb(255, 255, 255, 0.5);
            border: 2px solid black;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 45%;
            height: auto;
        }
        h2 {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 35px;
            background-color: rgb(131, 245, 57);
            border: none;
            border-radius: 15px;
            padding: 10px;
            margin: 0 0 20px 0;
        }
        label {
            display: flex;
            justify-content: left;
            margin-bottom: 10px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }
        [type="text"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: rgb(131, 245, 57);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: rgb(108, 254, 13);
            color: black;
        }
        .enlaces {
            padding: 15px;
        }
        a {
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
        }
        a:hover {
            color: black;
        }
        button {
            background-color: rgb(108, 254, 13);
            border-radius: 15px;
            border: none;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="{{ route('validar_registro') }}" method="POST">
            @csrf
            <input type="text" id="usuario" name="usuario" placeholder="USUARIO" required><br><br>
            <input type="password" id="contrasena" name="contrasena" placeholder="CONTRASENA" required><br><br>
            <div class="enlaces">
                <button type="submit">Iniciar Sesión</button>
            </div>
            <div class="enlaces">
                <!--<p>¿Olvidaste tu contraseña? <a href="{ route('password.request') }}">Recuperar</a></p>
                <p>¿Eres nuevo? <a href="{ route('register') }}">Regístrate</a></p>-->
            </div>
        </form>

    </div>
</body>
</html>

