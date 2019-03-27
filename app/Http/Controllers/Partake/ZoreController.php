<?php

namespace App\Http\Controllers\Partake;

use Illuminate\Http\Request;
use App\Http\Requests\Partake\ZoreStoreRequest;
use App\Http\Requests\Partake\ZoreUpdateRequest;

use App\Http\Controllers\Controller;

use App\Zore;
use PDF;

class ZoreController extends Controller
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

        $zores = Zore::orderBy('id', 'DESC')
            ->name($name)
            ->descripcion($descripcion)
            ->paginate(10);

        return view('foreign.zores.index', compact('zores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foreign.zores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ZoreStoreRequest $request)
    {
        $zore = Zore::create($request->all());

        return redirect()->route('zores.create', $zore->id)->with('info', 'Zona de responsabilidad creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $zore = Zore::find($id);

        return view('foreign.zores.show', compact('zore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zore = Zore::find($id);

        return view('foreign.zores.edit', compact('zore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ZoreUpdateRequest $request, $id)
    {
        $zore = Zore::find($id);

        $zore->fill($request->all())->save();

        return redirect()->route('zores.edit', $zore->id)->with('info', 'Zona de responsabilidad actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zore = Zore::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }

    public function PDF()
    {
        $zores = Zore::all();
        $pdf = PDF::loadView('downloads.zores',compact('zores'));
        return $pdf->download('Zores-pdf.pdf');
        return redirect()->route('zores.index');
    }
}
