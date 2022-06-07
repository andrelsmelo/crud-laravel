<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    /**
     * Mostra a Pagina Home
     *
     * @return void
     */
    public function index()
    {
        return view('home');
    }
    /**
     * Mostra a Pagina Sobre
     *
     * @return void
     */
    public function sobre()
    {
        echo "Exibindo Conteudo Sobre";
    }
    /**
     * Mostra a Pagina Contato
     *
     * @return void
     */
    public function contato()
    {
        echo "Exibindo Conteudo Contato";
    }
    /**
     * Mostra a Pagina Serviços
     *
     * @return void
     */
    public function servicos()
    {
        echo "Exibindo Conteudo Servicos";
    }
    /**
     * Mostra um serviço por id
     *
     * @return void
     */
    public function servico(int $id)
    {
        $servico = [
            1 => [
                'nome' => 'Lavagem de Roupa',
                'descricao' => 'descrição longa demais...'
            ],
            2 => [
                'nome' => 'Lavagem de Coberta',
                'descricao' => 'descrição longa demais...'
            ],
            3 => [
                'nome' => 'Lavagem de Ursinho',
                'descricao' => 'descrição longa demais...'
            ],
        ];
       
        return view('servico',[
            'servico' => $servico[$id]
        ]);

    }
}
