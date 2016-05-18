<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEventoFormRequest;

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
        //
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
        $create = Evento::create($input);
        return redirect()->back();
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
