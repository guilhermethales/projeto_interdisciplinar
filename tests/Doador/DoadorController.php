<?php

class DoadorController extends \TestCase
{
    public function testCreate(){
        $nome = 'Guilherme Thales';
        $dados = [
            'nome' => $nome,
        ];

        $this->post('/doador/adiciona', $dados);
        $this->seeStatusCode(200);
        $this->seeJson([
            'nome' =>$nome,
        ]);
        $this->seeInDatabase('doadores', [
            'nome' => $nome,
        ]);
    }
}