<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo</title>
</head>
<body>
    <h1>Blog de libros</h1>
    <p>Mensaje enviado.</p>

    <p><strong>Nombre</strong>  {{$contacto['nombre']}}</p>
    <p><strong>Email</strong>  {{$contacto['email']}}</p>
    <p><strong>Sugerencia:</strong>  {{$contacto['mensaje']}}</p>
</body>
</html>