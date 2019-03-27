<?php

namespace App\Http\Controllers\Documents;

use Illuminate\Http\Request;
use App\Http\Requests\Docs\CharterStoreRequest;
use App\Http\Requests\Docs\CharterUpdateRequest;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Zore;
use App\Are;
use App\Charter;

Use Charts;
Use PDF;
class CharterController extends Controller
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
        $folio = $request->get('folio');

        $charters = Charter::orderBy('id', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->folio($folio)       
            ->paginate(10);

        return view('documentos.cartas.index', compact('charters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ares  = Are::orderBy('name', 'ASC')->pluck('name', 'id');
        $zores = Zore::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('documentos.cartas.create', compact('ares', 'zores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CharterStoreRequest $request)
    {
        $charter = Charter::create($request->all());
        // $this->authorize('pass', $carta);

        //IMAGE 
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $charter->fill(['file' => asset($path)])->save();
        }

        //TAGS
        // $post->tags()->attach($request->get('tags'));

        return redirect()->route('cartas.create', $charter->id)->with('info', 'Registro de carta de notificacion guardada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $charter = Charter::find($id);
        // $this->authorize('pass', $charter);

        return view('documentos.cartas.show', compact('charter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ares       = Are::orderBy('name', 'ASC')->pluck('name', 'id');
        $zores      = Zore::orderBy('name', 'ASC')->pluck('name', 'id');
        $charter    = Charter::find($id);
        // $this->authorize('pass', $charter);

        return view('documentos.cartas.edit', compact('charter', 'ares', 'zores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CharterUpdateRequest $request, $id)
    {
        $charter = Charter::find($id);
        // $this->authorize('pass', $carta);

        $charter->fill($request->all())->save();

        //IMAGE 
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $charter->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('cartas.edit', $charter->id)->with('info', 'Registro de carta de notificacion actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $charter = Charter::find($id)->delete();
        // $this->authorize('pass', $carta);

        return back()->with('info', 'Registro eliminado correctamente');
    }

    public function PDF()
    {
        $charters = Charter::all();
        $pdf = PDF::loadView('downloads.cartas',compact('charters'));
        return $pdf->download('Cartas de notificacion-pdf.pdf');
        return redirect()->route('cartas.index');
    }

    public function chart(Request $request)
    {
        $chart = Charts::database(Charter::all(),'bar','highcharts')
        ->elementLabel("Total")
        ->dimensions(800,250)
        ->responsive(false)
        ->groupBy('status');

        return view('charts.Charter', ['chart' => $chart]);
    }
}
