<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css">
    <style>
        body{
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        #listaNotas{
            width: 70%;
        }

        .operaciones{
            margin-top: 30px;
        }

        .crear{
            margin: 30px 0;
        }
    </style>
</head>
<body>
    <h1>LISTA DE NOTAS</h1>
    <a class="btn btn-primary crear" href="/notas/crear">Crear nota</a>

    <div class="accordion" id="listaNotas">
    @foreach($notasList as $n)
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#col-{{$n->id}}" aria-expanded="false" aria-controls="col-{{$n->id}}">
                {{$n->title}}
            </button>
            </h2>
            <div id="col-{{$n->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h2><strong>{{$n->title}}</strong></h2>
                    <p class="text-secondary"><i>Fecha de creacion: {{$n->created_at}}</i></p>
                    <p class="descripcion">{{$n->description}}</p>
                    <div class="operaciones">
                        <a class="btn btn-primary" href="/notas/editar/{{$n->id}}">Editar</a>
                        <a class="btn btn-primary bg-danger" href="/notas/eliminar/{{$n->id}}">Eliminar</a>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
    </div>
    <!-- <ul>
    @foreach($notasList as $n)
        <li>{{$n->title}}
            <a class="btn btn-primary" href="/notas/editar/{{$n->id}}">Editar</a>
            <a class="btn btn-primary bg-danger" href="/notas/eliminar/{{$n->id}}">Eliminar</a>
        </li>
    @endforeach
    </ul> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.min.js"></script>
</body>
</html>