@extends('layouts.app')

@section('content')
<div class="hero-unit">
    <h1>Projeto Doador Voluntário!</h1>
</div>

@include('partials.alerts')

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
    @include('partials.alerts')
    <div class="row">
        <div class="col-md-2"></div>
        <div id="corpo" class="col-md-8">

            <div class="col-md-12 well well-large" id="formulario">
                <div class="form-group col-md-6">
                    <label class="labels">
                        Nome
                    </label>
                    <input type="text" class="form-control" name="nome" value="{{old('nome')}}" required
                    pattern="[a-zA-Z\s]+$">
                </div>
                <div class="form-group col-md-4">

                    <label class="labels">
                        Telefone
                    </label>
                    <input type="text" class="form-control" name="telefone" id="telefone" value="{{old('telefone')}}"
                           pattern="^\(?\d{2}\)?[\s-]?[\s9]?\d{4}-?\d{4}$" maxlength="11" required >
                </div>
                <div class="form-group col-md-2">

                    <label class="labels">
                        Tipo sanguíneo
                    </label>
                    <select class="form-control" name="tipo_sangue" value="{{old('tipo_sangue')}}">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
                <div class="form-group col-md-6">

                    <label class="labels">
                        Email
                    </label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}" required placeholder="email@email.com">
                </div>
                <div class="form-group col-md-6" id="divNascimento">
                    <div class="col-md-12">
                        <label class="labels">
                            Data de Nascimento
                        </label>
                    </div>

                    <div class="col-md-12" id="dataNascimento">
                        <input type="date" class="form-control" name="data_nasc" required
                        pattern="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.]((19|20)\\d\\d)$" min=“2012-01-01” max=“2014-02-18”>

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
<h2 class="hero-unit">
    Ranking TOP DOADORES
</h2>

    <div class="container">
        <img style="border-radius: 10px;" src="imagens/gamification.png" alt="Ranking Doadores" class="img-responsive ranking">
    </div>
<br>
    <footer class="panel-footer">
        <p class="text-center">&copy Copyright Todos os Direitos Reservados SI1A UNA</p>
    </footer>
@stop