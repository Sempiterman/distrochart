<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Requests\Personal\AccountStoreRequest;
use App\Http\Requests\Personal\AccountUpdateRequest;

use App\Http\Controllers\Controller;

Use App\Account;
Use PDF;
Use Charts;
class AccountController extends Controller
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
        $nameuser     = $request->get('nameuser');
        $nummoviline  = $request->get('nummoviline');

        $accounts = Account::orderBy('id', 'DESC')
            ->correo($correo)       
            ->nameuser($nameuser)
            ->nummoviline($nummoviline)       
            ->paginate(10);

        return view('personal.cuentas.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.cuentas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountStoreRequest $request)
    {
        $account = Account::create($request->all());

        return redirect()->route('cuentas.create', $account->id)
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
        $account = Account::find($id);

        return view('personal.cuentas.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = Account::find($id);

        return view('personal.cuentas.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccountUpdateRequest $request, $id)
    {
        $account = Account::find($id);

        $account->fill($request->all())->save();

        return redirect()->route('cuentas.edit', $account->id)->with('info', 'Etiqueta actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Account::find($id)->delete();

        return back()->with('info','Eliminado correctamente');
    }

    public function PDF()
    {
        $accounts = Account::all();
        $pdf = PDF::loadView('downloads.cuentas',compact('accounts'));
        return $pdf->download('Cuentas-Moviles-pdf.pdf');
        return redirect()->route('cuentas.index');
    }

    public function chart(Request $request)
    {
        $chart = Charts::database(Account::all(),'bar','highcharts')
        ->elementLabel("Total")
        ->dimensions(800,250)
        ->responsive(false)
        ->groupBy('status');

        return view('charts.Account', ['chart' => $chart]);
    }
}
