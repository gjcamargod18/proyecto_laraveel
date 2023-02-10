<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['empleados'] = Empleados::paginate(10);
        return view('empleados.create_empleado',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'identificacion' => ['required'],
            'nombres' => ['required'],
            'salario' => ['required']
        ]);
        $datos_empleados = request()->except('_token');
        Empleados::insert($datos_empleados);
        return redirect('empleados/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */

    public function edit(Empleados $empleado){
        return view('empleados.edit', ['empleado'=> $empleado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleados $empleado)
    {
            $request->validate([
            'identificacion' => ['required'],
            'nombres' => ['required'],
            'salario' => ['required']
        ]);
        $empleado->identificacion = $request->input('identificacion');
        $empleado->nombres = $request->input('nombres');
        $empleado->salario = $request->input('salario');
        $empleado->save();

        return to_route('create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleados $empleado)
    {
        $empleado->delete();
        return to_route('create');

    }
}

