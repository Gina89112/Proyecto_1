
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Georgina Dayan</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('estilos.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1kR+x4ZlbqMjfx3sdF8duvo7z1peR5+0JwRq8kl9byPMb0j3Bsq3VFFxMlFcO5t" crossorigin="anonymous"></script>
    <script src="{{ asset('peliculas.js') }}"></script>
    <style>
        body {
            background-color: rgb(20, 19, 19);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: "Lucida Bright", "Georgia", serif; /* Cambio de fuente */
        }

        form {
            background-color: white;
            padding: 40px;
            border-radius: 20px; /* Bordes más redondeados */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 490px; /* Ajusta el ancho según tus necesidades */
        }

        h1, h3 {
            text-align: center;
        }

        input[type="text"], input[type="file"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border-radius: 10px; /* Bordes más redondeados */
            border: 1px solid #ccc; /* Añadir un borde para resaltar los inputs */
        }

        input[type="submit"] {
            background-color: #fa9c9c;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #fa9c9c;
        }
    </style>
</head>
<body>

    <form action="{{ route('Cine.stori') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1> Agregar Sala</h1> <br>
        <h3> Nombre <input type="text" name="nombre" id="nombre"> </h3>
        <h3> Precio <input type="text" name="Precio" id="Precio"> </h3>
        <input type="file" id="imagen" name="imagen" accept="image/*">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
