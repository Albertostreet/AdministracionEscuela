<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante Editar</title>
</head>
<body>
<h2>ESTUDIANTES EDITAR</h2>
    <div id="navPlaceholder">
        
    </div>
    <div id="bodyPlaceholder">
        <a href="estudianteSeleccionarTodo">Regresar</a>
    <form method="post" action="{{ url('../estudianteEditar') }}">
            {{ csrf_field() }}
            @foreach ($listaEstudiantes as $estudiante)
            <div>
                <div>
                    <label for="">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="{{$estudiante->nombre}}">
                </div>
                <div>
                    <label for="">Codigo</label>
                    <input type="text" id="codigo" name="codigo" value="{{$estudiante->codigo}}" disabled>
                </div>
            </div>
            <div>
                <div>
                    <label for="">Carrera</label>
                    <input type="text" id="carrera" name="carrera" value="{{$estudiante->carrera}}">
                </div>
                <div>
                    <label for="">Créditos Cursados</label>
                    <input type="number" id="creditos_cursados" name="creditos_cursados" value="{{$estudiante->creditos_cursados}}">
                </div>
            </div>
            <div>
                <label for="">Correo</label>
                <input type="email" id="correo" name="correo" value="{{$estudiante->correo}}">
            </div>
            @endforeach
            <br>
            <button type="submit">Editar Estudiante</button>
    </form>

    </div>
    </div>
</body>
</html>