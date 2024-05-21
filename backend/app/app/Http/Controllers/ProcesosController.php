<?php

namespace App\Http\Controllers;

use App\Models\Proceso;
use Illuminate\Http\Request;

class ProcesosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $procesos = Proceso::all();
        return response()->json($procesos);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $proceso = new Proceso();
        $proceso->prefijo = $request->input('prefijo');
        $proceso->nombre = $request->input('nombre');
        $proceso->save();

        return response()->json(['message' => 'Proceso creado con éxito!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $proceso = Proceso::find($id);
        if (!$proceso) {
            return response()->json(['error' => 'Proceso no encontrado'], 404);
        }
        return response()->json($proceso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $proceso = Proceso::find($id);
        if (!$proceso) {
            return response()->json(['error' => 'Proceso no encontrado'], 404);
        }
        $proceso->prefijo = $request->input('prefijo');
        $proceso->nombre = $request->input('nombre');
        $proceso->save();

        return response()->json(['message' => 'Proceso actualizado con éxito!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $proceso = Proceso::find($id);
        if (!$proceso) {
            return response()->json(['error' => 'Proceso no encontrado'], 404);
        }
        $proceso->delete();

        return response()->json(['message' => 'Proceso eliminado con éxito!']);
    }
}
