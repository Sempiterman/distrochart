<?php

namespace App\Http\Controllers\Partake;

use Illuminate\Http\Request;
use App\Http\Requests\Partake\AreStoreRequest;
use App\Http\Requests\Partake\AreUpdateRequest;

use App\Http\Controllers\Controller;

use App\Are;
use PDF;

class AreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $name         = $request->get('name');
        $descripcion  = $request->get('descripcion');
        
        $ares = Are::orderBy('id', 'DESC')
            ->name($name)
            ->descripcion($descripcion)
            ->paginate(10);

        return view('foreign.ares.index', compact('ares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foreign.ares.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreStoreRequest $request)
    {
        $are = Are::create($request->all());

        return redirect()->route('ares.edit', $are->id)->with('info', 'Registro éxitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $are = Are::find($id);

        return view('foreign.ares.show', compact('are'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $are = Are::find($id);

        return view('foreign.ares.edit', compact('are'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreUpdateRequest $request, $id)
    {
        $are = Are::find($id);

        $are->fill($request->all())->save();

        return redirect()->route('ares.edit', $are->id)->with('info', 'Area de responsabilidad actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $are = Are::find($id)->delete();

        return back()->with('info', 'Registro eliminado correctamente');
    }

    public function PDF()
    {
        $ares = Are::all();
        $pdf = PDF::loadView('downloads.are',compact('ares'));
        return $pdf->download('Ares-PDF.pdf');
        return redirect()->route('ares.index');
    }
}
