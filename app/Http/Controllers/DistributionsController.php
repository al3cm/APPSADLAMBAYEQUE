<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distribution;
use App\BaseModel;
use Illuminate\Support\Facades\Redirect;
use App\Http\Request\DistributionsFormRequest;
use DB;

class DistributionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $query=trim($request->get('searchText'));
            $distributions=DB::table('distribution')->where('name','LIKE','%'.$query.'%')
            ->orderBy('created_at','desc')
            ->paginate(5);
            return view('admin.distributions.index',['distributions'=>$distributions,'searchText'=>$query]);
        }
        /*
        //código anterior:
        //$distributions = Distribution::all();
        $distributions = Distribution::orderBy('created_at','DESC')->paginate(5);
        return view('admin.distributions.index',compact('distributions'));
    */
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
    public function store(DistributionsFormRequest $request)
    {
    
        Distribution::create($request->all());
        return Redirect::to('distributions.index');
    //    return redirect()->route('distributions.index');
    }
/*
    //antiguo:
    public function store(Request $request)
    {
        //Realizar el guardado
        //dd($request)->all();
        Distribution::create($request->all());
        return redirect()->route('distributions.index');
    }
*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar distribution
        return view('admin.distributions.show',['distribution' => Distribution::findOrFail($id)]);
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
        /* $distribution = Distribution::findOrFail($id);

         return view('admin.distributions.edit',compact('distribution'));
*/

        return view('admin.distributions.edit',['distribution' => Distribution::findOrFail($id)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DistributionsFormRequest $request, $id)
    {
        if ($request["end_date"]=="")
            $request["end_date"]= null;
       
        $distribution = Distribution::findOrFail($id)->update($request->all());
        //return redirect()->route('distributions.index');
        return Redirect::to('distributions.index');
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
      // return redirect()->route('distributions.index');
        return Redirect::to('distributions.index');
    }
}
