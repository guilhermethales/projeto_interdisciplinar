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
    public function adiciona(DoadorRequest $request)
    {
        Doador::create($request->all());
        return view('index')->with('success ', 'Cadastro enviado com sucesso!');
    }

    public function mostra($id)
    {
        $d = Doador::find($id);

        return view('doadores.detalhes')->with('d',$d);
    }

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
    public function filtrarDoador(){
        $tipoSangue = Request::get('/doadores/filtrarDoador');
        $doador = Doador::orderBy('data', 'ASC');

        switch ($tipoSangue) {
            case 'ap':
                return $doador->where($doador->tipo_sangue == "A+")->paginate();
                break;

            case 'an':
                return $doador->where($doador->tipo_sangue == "A-")->paginate(10);
                break;

            case 'bp':
                return $doador->where($doador->tipo_sangue == "B+")->paginate(10);
                break;

            case 'bn':
                return $doador->where($doador->tipo_sangue == "B-")->paginate(10);
                break;

            case 'abp':
                return $doador->where($doador->tipo_sangue == "AB+")->paginate(10);
                break;

            case 'abn':
                return $doador->where($doador->tipo_sangue == "AB-")->paginate(10);
                break;

            case 'op':
                return $doador->where($doador->tipo_sangue == "O+")->paginate(10);
                break;

            case 'on':
                return $doador->where($doador->tipo_sangue == "O-")->paginate(10);
                break;

            default:
                echo 'erro';
                break;
        }

        return view('doadores.listagem')->with('doadores', $doador);
    }
}
