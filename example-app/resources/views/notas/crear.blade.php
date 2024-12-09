<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        form{
            width: 400px;
            border: 1px solid lightgray;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>CREAR NOTA</h1>
    <form action="{{route('notas.guardar')}}" method="POST">
        @csrf
    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" aria-describedby="tituloHelp" name="title">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a class="btn btn-primary bg-danger" href="/notas">Cancelar</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.min.js"></script>
</body>
</html>