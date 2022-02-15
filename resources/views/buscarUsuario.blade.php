<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background-color: grey;">
    <div class="container ">
        <div class="row mt-5">
        <div class="bg-light">
            <div class="row d-flex flex-column align-content-center mt-2">
            <div class="col-4 bg-light border">
                <p class="h4 pt-2">Buscar</p>
            </div>
            <div class="col-4 border pt-2 pb-4">
                <form method="post" action="/buscarUsuario">
                    {{ @csrf_field() }}
                    <input type="text" name="name" class="form-control" placeholder="Introduce nombre" />
                    <br>
                    <input type="date" name="date" required class="form-control" />
                    <br>
                    <button class="btn btn-success">Buscar</button>
                </form>
            </div>
    </div>
        </div>
        <div class="row d-flex flex-column align-content-center mt-2">
    <div class="col-4 bg-light border">
        <p class="h4 pt-2">Búsqueda</p>
    </div>
    <div class="col-4 border pt-2 pb-4">
        <table class="table table-striped">
                <tr>
                    <th>Tarea</th>
                    <th>Fecha</th>
                    <th>Usuario</th>
                </tr>
                @if($usuarios != null)
                @if(count($usuarios) > 0)
                @foreach($usuarios as $usuario)
                @foreach($usuario->tareas as $tarea)
                <tr>
                    <td>{{ $tarea->nombreTarea }}</td>
                    <td>{{ $tarea->created_at }}</td>
                    <td>{{ $usuario->nombre }}</td>
                </tr>
                @endforeach
                @endforeach
                @endif
                @endif

        </table>
    </div>
</div>
        

    </div>
    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center">
            <h3><a href="./" style="text-decoration: none;color: white;">Home<i class="bi bi-house"></a></i></h3>

        </div>
    </div>
</body>

</html>