<?php

namespace App\Http\Controllers\Documents;

use Illuminate\Http\Request;
use App\Http\Requests\Docs\MovilStoreRequest;
use App\Http\Requests\Docs\MovilUpdateRequest;

use App\Http\Controllers\Controller;

use App\Movil;
use App\Employ;

use Charts;
use PDF;

class MovilController extends Controller
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
        $folio= $request->get('folio');

        $movils = Movil::orderBy('id', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->folio($folio)       
            ->paginate(10);

        return view('documentos.moviles.index', compact('movils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employs = Employ::orderBy('numempleado', 'ASC')->pluck('numempleado', 'id');

        return view('documentos.moviles.create', compact('employs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovilStoreRequest $request)
    {
        $movil = Movil::create($request->all());

        return redirect()->route('moviles.create', $movil->id)->with('info', 'Informacion de equipo movil guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movil = Movil::find($id);
        $employ = Employ::find($id);
        // $this->authorize('pass', $post);

        return view('documentos.moviles.show', compact('movil','employ'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employs     = Employ::orderBy('name', 'ASC')->pluck('name', 'id');
        $movil       = Movil::find($id);
        // $this->authorize('pass', $post);

        return view('documentos.moviles.edit', compact('employ', 'movil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovilUpdateRequest $request, $id)
    {
        $movil = Movil::find($id);
        // $this->authorize('pass', $post);

        $movil->fill($request->all())->save();

        return redirect()->route('moviles.edit', $movil->id)->with('info', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movil = Movil::find($id)->delete();
        // $this->authorize('pass', $post);

        return back()->with('info', 'Eliminado correctamente');
    }

    public function PDF()
    {
        $movils = Movil::all();
        $pdf = PDF::loadView('downloads.moviles',compact('movils'));
        return $pdf->download('Equipos moviles-pdf.pdf');
        return redirect()->route('moviles.index');
    }

    // public function Acuse($id)
    // {
    //     // $movil = Movil::find('id');
        
    //     $movil = Movil::where('id', $id)->first();

    //     $pdf = PDF::loadView('downloads.AcuseMovil',compact('movil'));
    //     return $pdf->download('Equipos moviles-pdf.pdf');
    //     return redirect()->route('moviles.index');

    //     // public function post($slug)
    //     // {
    //     // $post = Post::where('slug', $slug)->first();
    //     // return view('web.post', compact('post'));
    //     // }
    // }
    public function chart(Request $request)
    {
        $chart = Charts::database(Movil::all(),'bar','highcharts')
        ->elementLabel("Total")
        ->dimensions(800,250)
        ->responsive(false)
        ->groupBy('status');

        return view('charts.Movil', ['chart' => $chart]);
    }
}

