<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Role; // Asegúrate de que esté apuntando al namespace correcto
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|min:6',
            'rol' => 'required'
        ]);

        $usuario = new Usuario($request->all());
        $usuario->password = bcrypt($usuario->password); // Encriptar contraseña
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = Usuario::with('roles')->findOrFail($id);
        $roles = Role::all();
        dd($usuario, $roles);  // Verificar los datos obtenidos
        return view('usuarios.edit', compact('usuario', 'roles'));
    }




    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios,email,' . $usuario->id,
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,id'
        ]);

        $usuario->update($validatedData);

        // Sincronizamos los roles después de validar que cada ID de rol enviado exista
        $usuario->roles()->sync($request->roles);

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente');
    }


    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
