@extends('layouts.principal')

@section('conteudo')
<h1>Lista de Doadores</h1>

	<div class="box">

        <div class="container">
        	<form method="get" action="/doadores/pesquisa">
   				<input type="text" name="busca" value="" class="form-control pesquisa" placeholder="Pesquise pelo nome do doador" />
   			</form>

        <br>
	 <div class="box-body">
      	<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>Telefone</th>
					<th>Tipo Sanguíneo</th>
					<th>Data Nascimento</th>
				</tr>
			</thead>
			<tbody>
@foreach($doadores as $d)
    <tr>
        <td>{{ $d->nome }}</td>
        <td>{{ $d->sobrenome }}</td>
        <td>{{ $d->telefone }}</td>
        <td>{{ $d->tipo_sangue }}</td>
        <td>{{ date('d/m/Y', strtotime($d->data_nasc)) }}</td>

    </tr>
 @endforeach
    </tbody>

    </table>
    </div>
        </div>
    <!-- /.box-body -->

    </div>




            <!-- Modal DELETE -->

    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalLabel">Excluir Doador</h4>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir este doador?
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary btn-ok">Sim</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                </div>
            </div>
        </div>
    </div>
@stop