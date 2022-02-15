<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class UsuarioController extends Controller
{
    function crear(Request $request){
        Usuario::create([
            'nombre' => $request -> post('nombre'),
            'apellido' => $request -> post('apellido'),
        ]);
        return redirect("/usuarios");
    }
    
    function mostrar(){
        $usuariosDB = DB::table('usuarios')->get();
        return view('/usuarios',['usuarios' => $usuariosDB]);
    }
    function borrar($id){
        //DB::table('tareas')->where('id', '=', $id)->delete();
        Usuario::destroy($id);
        return redirect('/usuarios');
    }
    function mostrarRelacion(){
        $usuariosDB = DB::table('usuarios')->get();
        $tareasDB = DB::table('tareas')->get();
        return view("/relacion", ['usuarios' => $usuariosDB, 'tareas' => $tareasDB]);
    }
    function mostrarAvanzado(){
        $usuariosDB = DB::table('usuarios')->get();
        $tareas = null;
        return view("/avanzado", ['usuarios' => $usuariosDB, 'tareas' => $tareas]);
    }
    function busqueda(Request $request){
        $usuariosDB = DB::table('usuarios')->get();

        $tareas = Tarea::where('usuario_id', $request->usuario)->get();
        if($tareas != null){
            return view("avanzado", ['tareas' => $tareas, 'usuarios' => $usuariosDB]);
        }
        return redirect()->back();
        //return view("avanzado", ['tareas' => $tareas]);
    }
    function ensenaBusqueda(){
        $usuarios = null;
        return view('buscarUsuario', ['usuarios' => $usuarios]);
    }
    function buscarPorFecha(Request $request){
        // $date = Usuario::where('nombre', $request->name)->get('created_at');
        // $date = Carbon::now();
        // $date = $date->format('Y-m-d');
        
        $buscarUsuario = Usuario::where('created_at', '>=', $request->date)->where('nombre', $request->name)->get();
        return view('buscarUsuario', ['usuarios' => $buscarUsuario]);
    }
}
