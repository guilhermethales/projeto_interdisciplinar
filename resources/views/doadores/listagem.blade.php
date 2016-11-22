@extends('layouts.app')

@section('content')
<h1>Lista de Doadores</h1>

	<div class="box">

        <div class="container">
            <div class="form-group">
                <form method="get" action="/pesquisa">
                    <input type="text" name="busca" value="" class="form-control pesquisa" placeholder="Pesquise pelo nome do doador" />
                </form>
            </div>

            <div class="form-group">
                <div class="form-group nome">
                    <p>Filtrar por Tipo Sanguíneo:</p>
                </div>

                @include('partials.alerts')

                <div class="form-group col-md-3 filtroDoador">
                    <form method="get" action="/filtrarDoador">
                        <select name="filtrarDoador" class="form-control select">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>

                        <button class="btn btn-primary" type="submit">Buscar</button>
                    </form>
                 </div>

      	<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Telefone</th>
					<th>Tipo Sanguíneo</th>
					<th>Data Nascimento</th>
                    <th colspan="3">Ações</th>
				</tr>
			</thead>

			<tbody>
                @foreach($doadores as $d)
                 <tr>
                    <td>{{ $d->nome }}</td>
                    <td>{{ $d->telefone }}</td>
                    <td>{{ $d->tipo_sangue }}</td>
                    <td>{{ date('d/m/Y', strtotime($d->data_nasc)) }}</td>
                    <td width="20px">
                        <a href="{{action('DoadorController@mostra', $d->id)}}" title="Visualizar">
                            <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>
                    <td width="20px">
                        <a href="" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td width="20px">
                        <a data-toggle="modal" data-target="#delete-modal" href="#"
                           data-href="/doadores/remove/{{ $d->id }}">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
    </div>
            {!!$doadores->render()!!}
        </div>
    <!-- /.box-body -->

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