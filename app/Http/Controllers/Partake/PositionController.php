<?php

namespace App\Http\Controllers\Partake;

use Illuminate\Http\Request;
use App\Http\Requests\Partake\PositionStoreRequest;
use App\Http\Requests\Partake\PositionUpdateRequest;

use App\Http\Controllers\Controller;

use App\Position;

class PositionController extends Controller
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

        $positions = Position::orderBy('id', 'DESC')
            ->name($name)
            ->descripcion($descripcion)
            ->paginate(10);

        return view('foreign.cargos.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foreign.cargos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PositionStoreRequest $request)
    {
        $position = Position::create($request->all());

        return redirect()->route('cargos.create', $position->id)->with('info', 'Cargo creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $position = Position::find($id);

        return view('foreign.cargos.show', compact('position'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $position = Position::find($id);

        return view('foreign.cargos.edit', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PositionUpdateRequest $request, $id)
    {
        $position = Position::find($id);

        $position->fill($request->all())->save();

        return redirect()->route('cargos.edit', $position->id)->with('info', 'Cargo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $position = Position::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
