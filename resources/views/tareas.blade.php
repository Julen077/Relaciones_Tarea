<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background-color: grey;">
    <div class="container bg-dark">
        <div class="row">
            <div class="col-8 text-center" style="margin-left: 225px;">
                <h1 class="text-white mb-5">Lista de tareas:</h1>
                <div class="bg-light">
                    <h2>Añadir Tarea</h2>
                    <form method="post" action="/tareas">
                        {{ csrf_field() }}
                        <p>Introduzca nombre de tarea:</p>
                        <input type="text" name="nombreTarea">
                        
                        <p>Escoge usuario:</p>
                        <select name="usuario_id">
                        @if(count($usuarios) > 0)
                            @foreach($usuarios as $usuario)
                        <tr>
                            <option value="{{$usuario->id}}">{{ $usuario->nombre }}</option>
                        </tr>
                        @endforeach
                        @endif
                            
                        </select>
                        <button>Enviar</button>
                    </form>
                </div>
                <br>
                
            </div>
        </div>

    </div>
    <div class="container bg-dark">
        <div class="row">
            <div class="col-6 text-center" style="margin-left: 325px;">
                <h1 class="text-white mb-5">Lista de usuarios:</h1>
                <div class="bg-light">
                    <h2>Añadir usuario</h2>
                    <form method="post" action="/tareas/usuario">
                        {{ csrf_field() }}
                        <p>Introduzca nombre de usuario:</p>
                        <input type="text" name="nombre">
                        <p>Introduzca apellido</p>
                        <input type="text" name="apellido">
                        <button>Enviar</button>
                    </form>
                </div>
                <br>
                <!-- <div class="bg-light">
                    <h2>Lista de usuarios</h2>
                    <table class="table table-striped">
                        <tr>
                            <td><b>ID</b></td>
                            <td><b>Nombre</b></td>
                            <td><b>Apellido</b></td>
                            <td><b>Eliminar</b></td>
                            @if(count($usuarios) > 0)
                            @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->apellido }}</td>
                            <td>
                                <form method="POST" action="/usuarios/{{$usuario->id}}">
                                    {{ @csrf_field() }}
                                    @method('delete')
                                    <input type="submit" style="background-color:red;" value="X" />
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </table>

                </div> -->
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