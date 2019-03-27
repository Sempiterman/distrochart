<?php

namespace App\Http\Controllers\Partake;

use Illuminate\Http\Request;
use App\Http\Requests\Partake\MunicipalityStoreRequest;
use App\Http\Requests\Partake\MunicipalityUpdateRequest;

use App\Http\Controllers\Controller;

use PDF;
use App\Municipality;

class MunicipalityController extends Controller
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
    public function index(Request $request)
    {
        $name         = $request->get('name');
        $descripcion  = $request->get('descripcion');
        
        $municipalities = Municipality::orderBy('id', 'DESC')
            ->name($name)
            ->descripcion($descripcion)
            ->paginate(10);

        return view('foreign.municipios.index', compact('municipalities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foreign.municipios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MunicipalityStoreRequest $request)
    {
        $municipality = Municipality::create($request->all());

        return redirect()->route('municipios.create', $municipality->id)->with('info', 'Municipio creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $municipality = Municipality::find($id);

        return view('foreign.municipios.show', compact('municipality'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipality = Municipality::find($id);

        return view('foreign.municipios.edit', compact('municipality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MunicipalityUpdateRequest $request, $id)
    {
        $municipality = Municipality::find($id);

        $municipality->fill($request->all())->save();

        return redirect()->route('municipios.edit', $municipality->id)->with('info', 'Municipio actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $municipality = Municipality::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }

    public function PDF()
    {
        $municipalities = Municipality::all();
        $pdf = PDF::loadView('downloads.municipios',compact('municipalities'));
        return $pdf->download('Municipios-pdf.pdf');
        return redirect()->route('municipios.index');
    }
}
