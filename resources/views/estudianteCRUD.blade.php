<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstudianteCRUD</title>
</head>
<body>
    <h2>ESTUDIANTES CRUD</h2>
    <div id="navPlaceholder">
        
    </div>
    <div id="bodyPlaceholder">
        <a href="estudianteAgregarForm">Agregar Estudiante</a>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Carrera</th>
                <th>Créditos Cursados</th>
                <th>Correo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @foreach ($listaEstudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante->nombre}}</td>
                <td>{{ $estudiante->codigo}}</td>
                <td>{{ $estudiante->carrera}}</td>
                <td>{{ $estudiante->creditos_cursados}}</td>
                <td>{{ $estudiante->correo}}</td>
                
                <td><a href="{{ url('estudianteEditarForm/'.$estudiante->codigo) }}">Editar</a></td>
                <td></td>
            </tr>
            @endforeach
        </table>

    </div>
</body>
</html>