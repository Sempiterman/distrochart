<?php

namespace App\Http\Controllers\Documents;

use Illuminate\Http\Request;
use App\Http\Requests\Docs\KitStoreRequest;
use App\Http\Requests\Docs\KitUpdateRequest;

use App\Http\Controllers\Controller;

use App\Kit;
use App\Employ;

Use Charts;
use PDF;

class KitController extends Controller
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

        $kits = Kit::orderBy('id', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->folio($folio)       
            ->paginate(10);

        return view('documentos.equipos.index', compact('kits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employs = Employ::orderBy('numempleado', 'ASC')->pluck('numempleado', 'id');

        return view('documentos.equipos.create', compact('employs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KitStoreRequest $request)
    {
        $kit = Kit::create($request->all());
        // $this->authorize('pass', $post);

        //IMAGE 
        // if($request->file('image')){
        //     $path = Storage::disk('public')->put('image',  $request->file('image'));
        //     $post->fill(['file' => asset($path)])->save();
        // }

        //TAGS
        // $kit->tags()->attach($request->get('tags'));

        return redirect()->route('equipos.create', $kit->id)->with('info', 'Equipo guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kit = Kit::find($id);
        // $this->authorize('pass', $post);

        return view('documentos.equipos.show', compact('kit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employs   = Employ::orderBy('name', 'ASC')->pluck('name', 'id');
        $kit       = Kit::find($id);
        // $this->authorize('pass', $post);

        return view('documentos.equipos.edit', compact('employ', 'kit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KitUpdateRequest $request, $id)
    {
        $kit = Kit::find($id);
        // $this->authorize('pass', $post);

        $kit->fill($request->all())->save();

        return redirect()->route('equipos.edit', $kit->id)->with('info', 'Registro actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kit = Kit::find($id)->delete();
        // $this->authorize('pass', $post);

        return back()->with('info', 'Eliminado correctamente');
    }

    public function PDF()
    {
        $kits = Kit::all();
        $pdf = PDF::loadView('downloads.equipos',compact('kits'));
        return $pdf->download('Equipos de personal-pdf.pdf');
        return redirect()->route('equipos.index');
    }

    public function chart(Request $request)
    {
        $chart = Charts::database(Kit::all(),'bar','highcharts')
        ->elementLabel("Total")
        ->dimensions(800,250)
        ->responsive(false)
        ->groupBy('status');

        return view('charts.Kit', ['chart' => $chart]);
    }
}
