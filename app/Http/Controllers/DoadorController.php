<?php

namespace App\Http\Controllers;

use App\Doador;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\DoadorRequest;

class DoadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function listaDoadores()
    {
        $doadores = Doador::orderBy('data_nasc', 'DESC')->paginate(10);

        return view('doadores.listagem')->with(compact('doadores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adiciona(DoadorRequest $request)
    {
        Doador::create($request->all());
        return view('index')->with('success ', 'Cadastro enviado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*
    public function show($id)
    {
        //
    }
*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

/*
    public function edit($id)
    {
        //
    }
*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*
    public function update(Request $request, $id)
    {
        //
    }
*/
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*
    public function destroy($id)
    {
        //
    }
*/
}
