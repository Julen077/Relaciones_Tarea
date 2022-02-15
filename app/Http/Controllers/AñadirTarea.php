<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use Illuminate\Support\Facades\DB;

class AñadirTarea extends Controller
{
    function mostrar(){
        $tareasDB = DB::table('tareas')->get();
        $usuarioDB = DB::table('usuarios')->get();
        return view('/tareas',['tareas' => $tareasDB, 'usuarios' => $usuarioDB]);
    }
    function crear(Request $request){
        Tarea::create([
            'nombreTarea' => $request -> post('nombreTarea'),
            'usuario_id' => $request ->post('usuario_id')
        ]);
        return redirect("/tareas");
    }
    
    function borrar($id){
        //DB::table('tareas')->where('id', '=', $id)->delete();
        Tarea::destroy($id);
        return redirect()->back();
    }
    
    
}
