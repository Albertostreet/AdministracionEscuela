<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\estudiante;

class EstudianteController extends Controller
{
    public function seleccionarTodo()
    {
        return view('estudianteCRUD', ['listaEstudiantes' => estudiante::all()]);
    }

    public function agregarForm()
    {
        return view('estudianteAgregar');
    }

    public function agregar(Request $request)
    {
        $nuevoEstudiante = new estudiante;
        $nuevoEstudiante->nombre = $request->nombre;
        $nuevoEstudiante->codigo = $request->codigo;
        $nuevoEstudiante->carrera = $request->carrera;
        $nuevoEstudiante->creditos_cursados = $request->creditos_cursados;
        $nuevoEstudiante->correo = $request->correo;
        $nuevoEstudiante->save();
        //\Log::info(json_encode($request->all()));
        return redirect('/estudianteSeleccionarTodo');
    }

    public function editarForm($codigo)
    {
        return view('estudianteEditar', ['listaEstudiantes' => estudiante::where('codigo', $codigo)->get()]);   
    }

    public function editar(Request $request)
    {
        
        $estudiante = estudiante::where('codigo', $request->codigo)->get();
        $estudiante->nombre = $request->nombre;
        $estudiante->carrera = $request->carrera;
        $estudiante->creditos_cursados = $request->creditos_cursados;
        $estudiante->correo = $request->correo;
        $estudiante->save();
        //\Log::info(json_encode($request->all()));
        //return redirect('/estudianteSeleccionarTodo');
    }

    public function eliminar(Request $request)
    {
        
    }

    public function seleccionar(Request $request)
    {
        
    }
}
