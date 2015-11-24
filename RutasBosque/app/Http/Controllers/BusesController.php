<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Http\Requests\BusRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buses=Bus::all();
       // $datos = "234_432423_23-11-15";
       // QrCode::format('png')->errorCorrection('H')->merge("./public/logotipo_uelbosque.png", 0.20)->size(100)->generate($datos, "../public/qrcodes/".$datos.".png");
       // $buses[0]["qr"]= "./qrcodes/".$datos.".png";
       return view('buses.index',compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * funcion que direcciona a la pagina de creacion de buses (form)
     */
    public function create()
    {
        //return $buses;
        return view('buses.create');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusRequest $request)
    {
       //$input=Request::all();
       /* $bus=new Bus;
        $bus->placa=$input['placa'];
        $bus->capacidad=$input['capacidad'];*/
       // Bus::create($input);

       // Auth::user();

        Bus::create($request->all());
        return redirect('buses');
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
        $bus=Bus:: findOrFail($id);
        return view('buses.edit',compact('bus'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BusRequest $request, $id)
    {

        $bus=Bus:: findOrFail($id);
        $bus->update($request->all());
        return redirect('buses');


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
