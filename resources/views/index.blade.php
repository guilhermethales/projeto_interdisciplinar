@extends('layouts.principal')

@section('conteudo')
<div class="hero-unit">
    <h1>Projeto Doador Voluntário!</h1>
</div>
<div class="carousel slide" id="carousel-597538">
    <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#carousel-597538">
        </li>
        <li data-slide-to="1" data-target="#carousel-597538">
        </li>
        <li data-slide-to="2" data-target="#carousel-597538">
        </li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img alt="Carousel Bootstrap First" src="imagens/doe_sangue2.png" class="img-responsive">
            <div class="carousel-caption">
                <h4>
                    Uma única doação de sangue pode salvar até quatro vidas.
                </h4>
                <p>
                    Especialistas dizem preferir os doadores voluntários aos de reposição(aqueles que só doam quando
                    algum conhecido precisa) pois conseguem ter maior controle sobre a procedência e qualidade do
                    sangue. Seja um doador voluntário!
                </p>
            </div>
        </div>
        <div class="item">
            <img alt="Carousel Bootstrap Second" src="imagens/eu%20curto%20doar.png" class="img-responsive">
            <div class="carousel-caption">
                <h4>
                    Apenas 1,8% da população brasileira doa sangue; ONU considera ideal entre 3% a 5%.
                </h4>
                <p>
                    Apesar de conhecidos mundialmente pela simpatia com que tratam o visitante estrangeiro, os
                    brasileiros são menos solidários com seus semelhantes ─ pelo menos quando o assunto é doar sangue.
                    Queremos mudar essa realidade!
                </p>
            </div>
        </div>
        <div class="item">
            <img alt="Carousel Bootstrap Third" src="imagens/doe%20sangue%20doe%20vida.png" class="img-responsive">
            <div class="carousel-caption">
                <h4>
                    Mais que um ato de cidadania! Um dever em sociedade. Vamos mudar a realidade em que vivemos!
                </h4>
                <p>
                    Transfusões de sangue fazem a diferença entre a vida e a morte para centenas de pacientes todos os
                    dias.
                </p>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-597538" data-slide="prev"><span
                class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control"
                                                                        href="#carousel-597538" data-slide="next"><span
                class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<div class="hero-unit">
    <h2>Como o projeto funciona?</h2>
</div>
<p class="text-center">
    O projeto Sou um Doador Ativo tem como objetivo aproximar as pessoas que desejam doar sangue daquelas que necessitam
    de receber doações. Entendemos a imensa dificuldade que organizações possuem na hora de encontrar doadores e na
    maioria das vezes isso ocorre em casos de emergência, podendo ser fator crucial para vida ou morte de uma pessoa.
    Sendo um doador ativo, seu contato formará um banco de dados com pessoas doadoras para que organizações responsáveis
    ou pessoas/famílias que precisam de doadores entrarão em contato.
    <!-- Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequ at eu.</small> -->
</p>
<div class="hero-unit">
    <h2>Basta apenas preencher as informações abaixo para se tornar um doador!</h2>
</div>
<form action="/adiciona" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    @include('partials.alerts')
    <div class="row">
        <div class="col-md-2"></div>
        <div id="corpo" class="col-md-8">

            <div class="col-md-12 well well-large" id="formulario">
                <div class="form-group col-md-6">
                    <label class="labels">
                        Nome
                    </label>
                    <input type="text" class="form-control" name="nome" value="{{old('nome')}}" required>
                </div>
                <div class="form-group col-md-6">

                    <label class="labels">
                        Sobrenome
                    </label>
                    <input type="text" class="form-control" name="sobrenome" value="{{old('sobrenome')}}" required>
                </div>
                <div class="form-group col-md-4">

                    <label class="labels">
                        Telefone
                    </label>
                    <input type="text" class="form-control" name="telefone" value="{{old('telefone')}}" required>
                </div>
                <div class="form-group col-md-2">

                    <label class="labels">
                        Tipo sanguíneo
                    </label>
                    <select class="form-control" name="tipo_sangue" value="{{old('tipo_sangue')}}">
                        <option value="ap">A+</option>
                        <option value="an">A-</option>
                        <option value="bp">B+</option>
                        <option value="bn">B-</option>
                        <option value="abp">AB+</option>
                        <option value="abn">AB-</option>
                        <option value="op">O+</option>
                        <option value="on">O-</option>
                    </select>
                </div>
                <div class="form-group col-md-6">

                    <label class="labels">
                        Email
                    </label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}" required>
                </div>
                <div class="form-group col-md-6" id="divNascimento">
                    <div class="col-md-12">
                        <label class="labels">
                            Data de Nascimento
                        </label>
                    </div>

                    <div class="col-md-12" id="dataNascimento">
                        <input type="date" class="form-control" name="data_nasc" required>

                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-danger">
                        Cadastrar-se
                    </button>
                </div>

            </div>
        </div>

    </div>
</form>
<h3 class="text-center">
    Abaixo podemos colocar um pouco sobre nossa intenção e etc.
</h3>
<p>
    Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in
    metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia
    non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales.
        Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em>
    Proin massa magna, vulputate nec bibendum nec, posuere nec lacus.
    <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum
        consequat eu.
    </small>
</p>
<div class="row">
    <div class="col-md-4">
        <div class="thumbnail">
            <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg">
            <div class="caption">
                <h3>
                    Thumbnail label
                </h3>
                <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at
                    eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                </p>
                <p>
                    <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail">
            <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg">
            <div class="caption">
                <h3>
                    Thumbnail label
                </h3>
                <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at
                    eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                </p>
                <p>
                    <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail">
            <img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg">
            <div class="caption">
                <h3>
                    Thumbnail label
                </h3>
                <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at
                    eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                </p>
                <p>
                    <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@stop