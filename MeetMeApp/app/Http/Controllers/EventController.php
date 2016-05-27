<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEventoFormRequest;
use Carbon\Carbon;
use Session;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consumo de datos json
        $data = array(); //declaramos un array principal que va a contener los datos
        $id = Evento::all()->lists('id');
        $titulo = Evento::all()->lists('nombre_evento');
        $lugar = Evento::all()->lists('ubicacion');
        $ini_date = Evento::all()->lists('fecha_ini');
        $end_date = Evento::all()->lists('fecha_fin');
        $count = count($id); //contamos los ids obtenidos para saber el número exacto de eventos
        //ciclo
        for ($i=0; $i < $count; $i++) { 
            $fini = Carbon::parse($ini_date[$i]);
            $ffin = Carbon::parse($end_date[$i]);
            # code...
            $data[$i] = array(
                "title" => $titulo[$i],
                "start" => $fini->format('Y-m-d'),
                "end" => $ffin->format('Y-m-d'),
                "url" => "http://meetme.app/evento/detalle/".$id[$i]
                //en el campo "url" concatenamos el el URL con el id del evento para luego
                //en el evento onclick de JS hacer referencia a este y usar el método show
                //para mostrar los datos completos de un evento
            );
        }
        json_encode($data); //convertimos el array principal $data a un objeto Json
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('layouts.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateEventoFormRequest  $request
     * @return Response
     */
    public function store(CreateEventoFormRequest $request)
    {
        //agregammos una entrada
        $input = $request->all();
        $input['fecha_ini'] = Carbon::createFromFormat('d/m/Y', $input['fecha_ini'])->format('Y-m-d');
        $input['fecha_fin'] = Carbon::createFromFormat('d/m/Y', $input['fecha_fin'])->format('Y-m-d');
        $evento = Evento::create($input);
        Session::flash('flash_message', 'Evento Agregado Exitosamente');
        return redirect('evento/detalle/'.$evento->id);
        //return response($create);
        //dd($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('layouts.event.detalle_evento')
        ->with('title', 'Detalle de evento')
        ->with('detalleEvent', Evento::find($id));
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
    public function destroy($id)
    {
        //
    }
}
