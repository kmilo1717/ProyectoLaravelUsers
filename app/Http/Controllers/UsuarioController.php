<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
class UsuarioController extends Controller
{
    //
    public function crear(){
        return view('usuario.create');
    }

    public function registrar(Request $request){
        $validate = $this->validate($request, [
            'name' => 'required|string|max:255',
			'surname' => 'required|string|max:255',
			'age' => 'required|integer',
            'city' => 'required|string'
        ]);

        $user = new Usuario();
        $user->nombre = $request->input('name');
        $user->apellido = $request->input('surname');
        $user->edad = $request->input('age');
        $user->ciudad = $request->input('city');
        $user->save();
        return redirect()->route('usuarios')
        ->with([
            'message' => 'Usuario registrado correctamente'
        ]);
    }

    public function view(){
       $usuarios = Usuario::all();
        return view('usuario.view', ['usersfind'=> $usuarios]);
    }


    public function gestion($id){

        $usuarioe = Usuario:: where('id', $id)->first();
        return view('usuario.manage', ['usuario'=> $usuarioe]);
    }

    public function actualizar(Request $request){
        $user = Usuario::find($request->id);
        $user->nombre = $request->input('name');
        $user->apellido = $request->input('surname');
        $user->edad = $request->input('age');
        $user->ciudad = $request->input('city');
        $user->update();
        return redirect()->route('usuarios')
        ->with([
            'message' => 'Usuario actualiazado correctamente'
        ]);
    }

    public function eliminar($id){
        $user= Usuario::find($id);
        $user->delete();

        return redirect()->route('usuarios')
        ->with([
            'message' => 'Usuario eliminado correctamente'
        ]);;
    }
}
