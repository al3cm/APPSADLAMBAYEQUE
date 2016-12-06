<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distribution;
use App\BaseModel;

class DistributionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$distributions = Distribution::all();
        $distributions = Distribution::orderBy('created_at','DESC')->paginate(5);
        return view('admin.distributions.index',compact('distributions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retornar la vista Crear
        return view('admin.distributions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Realizar el guardado
        //dd($request)->all();
        Distribution::create($request->all());
        return redirect()->route('distributions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar distribution
        $distribution = Distribution::findOrFail($id);
        return view('admin.distributions.show',compact('distribution'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Dirige a la vista editar
         $distribution = Distribution::findOrFail($id);

         return view('admin.distributions.edit',compact('distribution'));

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
        if ($request["end_date"]=="")
            $request["end_date"]= null;
       
//        dd($request->all());

        $distribution = Distribution::findOrFail($id)->update($request->all());
        return redirect()->route('distributions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Distribution::findOrFail($id)->delete();
        return redirect()->route('distributions.index');
    }
}
