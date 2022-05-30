<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>AGREGAR ESTUDIANTE</h2>
    <div id="navPlaceholder">
        
    </div>
    <div id="bodyPlaceholder">
        <a href="estudianteSeleccionarTodo">Regresar</a>
        <form method="post" action="estudianteAgregar">
            {{ csrf_field() }}
            <div>
                <div>
                    <label for="">Nombre</label>
                    <input type="text" id="nombre" name="nombre">
                </div>
                <div>
                    <label for="">Código</label>
                    <input type="text" id="codigo" name="codigo">
                </div>
            </div>
            <div>
                <div>
                    <label for="">Carrera</label>
                    <input type="text" id="carrera" name="carrera">
                </div>
                <div>
                    <label for="">Créditos Cursados</label>
                    <input type="number" id="creditos_cursados" name="creditos_cursados">
                </div>
            </div>
            <div>
                <label for="">Correo</label>
                <input type="email" id="correo" name="correo">
            </div>
            <br>
            <button type="submit">Agregar</button>
        </form>

    </div>
</body>
</html>