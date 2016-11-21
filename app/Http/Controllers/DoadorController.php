<?php

namespace App\Http\Controllers;

use App\Doador;


use Request;
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

   public function remove($id)
	{
		$doador = Doador::find($id);
        $doador->delete();

		return redirect(action('DoadorController@listaDoadores'))->with('success', 'Doador removido com sucesso!');
	}

    public function filtrarDoador(){
        $tipoSangue = Request::get('filtrarDoador');

        switch ($tipoSangue) {
            case 'A+':
                $filtro =  Doador::where('tipo_sangue','=',$tipoSangue)->paginate(10);
                break;

            case 'A-':
                $filtro = Doador::where('tipo_sangue','=',$tipoSangue)->paginate(10);
                break;

            case 'B+':
                $filtro =  Doador::where('tipo_sangue','=',$tipoSangue)->paginate(10);
                break;

            case 'B-':
                $filtro = Doador::where('tipo_sangue','=',$tipoSangue)->paginate(10);
                break;

            case 'AB+':
                $filtro =  Doador::where('tipo_sangue','=',$tipoSangue)->paginate(10);
                break;

            case 'AB-':
                $filtro =  Doador::where('tipo_sangue','=',$tipoSangue)->paginate(10);
                break;

            case 'O+':
                $filtro =  Doador::where('tipo_sangue','=',$tipoSangue)->paginate(10);
                break;

            case 'O-':
                $filtro =  Doador::where('tipo_sangue','=',$tipoSangue)->paginate(10);
                break;

            default:
                echo 'erro';
                break;
        }

        return view('doadores.listagem')->with('doadores', $filtro);
    }

    public function pesquisa(){
        $pesquisa = Request::get('busca');
        $doadores = Doador::where('nome','like','%'.$pesquisa.'%')
            ->orderBy('data_nasc','DESC')->paginate(10);

        return view('doadores.listagem')->with('doadores', $doadores);
    }
}
