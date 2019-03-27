<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Requests\Personal\EmployStoreRequest;
use App\Http\Requests\Personal\EmployUpdateRequest;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use Charts;
use PDF;
use App\Employ;
use App\Are;
use App\Municipality;
use App\Position;
use App\Zore;

class EmployController extends Controller
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
        $correo       = $request->get('correo');
        $numempleado  = $request->get('numempleado');
        $telefono     = $request->get('telefono');

        $employs = Employ::orderBy('id', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->correo($correo)       
            ->numempleado($numempleado)
            ->telefono($telefono)       
            ->paginate(10);

        return view('personal.empleados.index', compact('employs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ares            = Are::orderBy('name', 'ASC')->pluck('name', 'id');
        $municipalities  = Municipality::orderBy('name', 'ASC')->pluck('name', 'id');
        $positions       = Position::orderBy('name', 'ASC')->pluck('name', 'id');
        $zores           = Zore::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('personal.empleados.create', compact('ares', 'municipalities','positions','zores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployStoreRequest $request)
    {
        $employ = Employ::create($request->all());
        return redirect()->route('personal.create', $employ->id)->with('info', 'Registro de empleado guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employ = Employ::find($id);
        return view('personal.empleados.show', compact('employ'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ares           = Are::orderBy('name', 'ASC')->pluck('name', 'id');
        $municipality   = Municipality::orderBy('name', 'ASC')->pluck('name', 'id');
        $position       = Position::orderBy('name', 'ASC')->pluck('name', 'id');
        $zores          = Zore::orderBy('name', 'ASC')->pluck('name', 'id');
        $employ         = Employ::find($id);

        return view('personal.empleados.edit', compact('employ', 'ares','municipalities','positions', 'zores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployUpdateRequest $request, $id)
    {
        $employ = Employ::find($id);
        $employ->fill($request->all())->save();
        return redirect()->route('personal.edit', $employ->id)->with('info', 'Registro de empleado actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employ = Employ::find($id)->delete();
        return back()->with('info', 'Registro eliminado correctamente');
    }

    public function PDF()
    {
        $employs = Employ::all();
        $pdf = PDF::loadView('downloads.empleados',compact('employs'));
        return $pdf->download('Empleados-pdf.pdf');
        return redirect()->route('personal.index');
    }

    public function chart(Request $request)
    {
        $chart = Charts::database(Employ::all(),'donut','highcharts')
        ->elementLabel("Total")
        ->dimensions(800,250)
        ->responsive(true)
        ->groupBy('status');
        return view('charts.Employ', ['chart' => $chart]);
    }
}
