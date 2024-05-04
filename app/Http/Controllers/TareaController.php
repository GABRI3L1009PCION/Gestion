<?php

namespace App\Http\Controllers;


use App\Models\Tarea;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    // Muestra la lista de todas las tareas
    public function index()
    {
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas'));
    }

    // Muestra el formulario para crear una nueva tarea
    public function create()
    {
        return view('tareas.create');
    }

    // Almacena una nueva tarea en la base de datos
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nombre' => 'required|max:255',
                'descripcion' => 'required',
                'estado' => 'required|max:255',
                'fecha_inicio' => 'nullable|date',
                'fecha_fin' => 'nullable|date',
                'proyecto_id' => 'required|integer|exists:proyectos,id'
            ]);

            Tarea::create($validatedData);
            return redirect()->route('tareas.index')->with('success', 'Tarea creada con éxito.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Recoge y muestra los errores de validación
            return back()->withErrors($e->errors())->withInput();
        }
    }
    public function show(Tarea $tarea)
    {
        return view('tareas.show', compact('tarea'));
    }




    // Muestra el formulario para editar una tarea existente
    public function edit(Tarea $tarea)
    {
        $proyectos = Proyecto::all(); // Asegúrate de tener el modelo Proyecto y de importarlo
        return view('tareas.edit', compact('tarea', 'proyectos'));
    }



    // Actualiza una tarea en la base de datos
    public function update(Request $request, Tarea $tarea)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'estado' => 'required|max:255',
            'fecha_inicio' => 'nullable|date',
            'fecha_fin' => 'nullable|date',
            'proyecto_id' => 'required|integer|exists:proyectos,id'
        ]);

        $tarea->update($validatedData);

        return redirect()->route('tareas.index')->with('success', 'Tarea actualizada con éxito.');
    }


    // Elimina una tarea de la base de datos
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();

        return redirect()->route('tareas.index')->with('success', 'Tarea eliminada con éxito.');
    }
}
