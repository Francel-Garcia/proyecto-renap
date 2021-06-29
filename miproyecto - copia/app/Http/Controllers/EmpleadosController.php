<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empl']=Empleados::paginate(5);

        return view ('empleados.index',$datos);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // $datosEmpleados=request()->all();
       $datosEmpleados=request()->except('_token');


       if ($request->hasFile('Foto')){

$datosEmpleados['Foto']=$request->file('Foto')->store('uploads','public');



       }
       Empleados::insert($datosEmpleados);
           
           
       // return response()->json($datosEmpleados);
        
        return redirect('empleados')->with('mensaje','regristo exitoso');

        
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
    public function edit($id)
    {
        //
        $empleados=Empleados::findOrFail($id);
        return view ('empleados.edit',compact('empleados'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //

       $datosEmpleados = request()->except(['_token','_method']);

       if ($request->hasFile('Foto')){

        $empleados=Empleados::findOrFail($id);

        Storage::delete('public/'.$empleados->Foto);

        $datosEmpleados['Foto']=$request->file('Foto')->store('uploads','public');
        
        
        
               }
       
       Empleados::where('id','=',$id)->update($datosEmpleados);

       $empleados=Empleados::findOrFail($id);
       return view ('empleados.edit',compact('empleados'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $empleados=Empleados::findOrFail($id);


                   if (Storage::delete('public/'.$empleados->Foto)){

                    Empleados::destroy($id);
                   }



    

                   Empleados::destroy($id);
        
        
         return redirect('empleados');





    
    }
}
