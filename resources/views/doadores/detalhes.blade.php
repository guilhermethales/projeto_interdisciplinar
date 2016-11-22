<!doctype html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">

@extends('layouts.app')

@section('content')
    <h1>Doador {{$d->nome}}</h1>
        <div class="container">

            <ul class="list-group">
                <li class="list-group-item"><b>Id:</b> {{ $d->id }}</li>
                <li class="list-group-item"><b>Nome:</b> {{ $d->nome }}</li>
                <li class="list-group-item"><b>Telefone:</b> {{ $d->telefone }}
                <li class="list-group-item"><b>Tipo Sanguíneo:</b> {{ $d->tipo_sangue }}
                <li class="list-group-item"><b>Data de Nascimento:</b> {{ date('d/m/Y', strtotime($d->data_nasc)) }}</li>
            </ul>

            <a class="btn btn-primary">Editar</a>
            <a class="btn btn-danger">Excluir</a>

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

@stop

    <script src="js/app.js"></script>
    <script src="js/jquery.min.js"></script>