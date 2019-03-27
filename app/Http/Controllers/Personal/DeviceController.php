<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Requests\Personal\DeviceStoreRequest;
use App\Http\Requests\Personal\DeviceUpdateRequest;

use App\Http\Controllers\Controller;

Use App\Device;
Use PDF;
Use Charts;
class DeviceController extends Controller
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
        $imei       = $request->get('imei');
        $numtelchip     = $request->get('numtelchip');
        
        $devices = Device::orderBy('id', 'DESC')
            ->imei($imei)       
            ->numtelchip($numtelchip)      
            ->paginate(10);

        return view('personal.dispositivos.index', compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('personal.dispositivos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeviceStoreRequest $request)
    {
        $device = Device::create($request->all());

        return redirect()->route('dispositivos.create', $device->id)
            ->with('info', 'Registro exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $device = Device::find($id);

        return view('personal.dispositivos.show', compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $device = Device::find($id);

        return view('personal.dispositivos.edit', compact('device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DeviceUpdateRequest $request, $id)
    {
        $device = Device::find($id);

        $device->fill($request->all())->save();

        return redirect()->route('dispositivos.edit', $device->id)->with('info', 'Actualizacion exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Device::find($id)->delete();

        return back()->with('info','Eliminacion exitosa');
    }

    public function PDF()
    {
        $devices = Device::all();
        $pdf = PDF::loadView('downloads.dispositivos',compact('devices'));
        return $pdf->download('Dispositivos-moviles-pdf.pdf');
        return redirect()->route('dispositivos.index');
    }
    public function chart(Request $request)
    {
        $chart = Charts::database(Device::all(),'bar','highcharts')
        ->elementLabel("Total")
        ->dimensions(800,250)
        ->responsive(false)
        ->groupBy('status');

        return view('charts.Devices', ['chart' => $chart]);
    }
}