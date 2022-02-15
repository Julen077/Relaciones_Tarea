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
                <h2>Consulta tareas de usuario</h2>
                    <form method="post" action="avanzado">
                        @csrf
                        <select name="usuario">
                            @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-success">Buscar</button>
                    </form>
                </div> 
        </div>
        <div class="mt-5 bg-warning">
            <table>
                <tr>
                    <th>Tareas</th>
                </tr>
                @if($tareas != null)
                    @foreach($tareas as $tarea)
                        <tr>
                            <td>{{ $tarea->nombreTarea }}</td>
                        </tr>    
                    @endforeach
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