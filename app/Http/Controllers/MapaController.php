<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\reserva;

class MapaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = reserva::all();
        return view('menu.Mapainfo',compact('maps'));

    }

   public function store(Request $request)
    {
       
        $map=new reserva();
        $map->nombre = $request->get('nombre');
        $map->apellido = $request->get('apellido');
        $map->dni = $request->get('dni'); 
        $map->acom = $request->get('acompañantes');
        $map->fecha = $request->get('fecha');  
        $map->hora = $request->get('hora');     
        $map->save();
        return redirect('/home');

        
    }




  public function inicio()
    {

      return view('reserva');
    }


  public function destroy($id)
    {
          $user= reserva::find($id);
          $user->delete();
          return redirect('/home');
    } 


    public function create()
    {

    }



  
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
}
