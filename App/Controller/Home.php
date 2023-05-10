<?php

use App\Library\ControllerMain;

class Home extends ControllerMain
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $this->loadView('home');
    }

    /**
     * quemSomos
     *
     * @return void
     */
    public function quemSomos()
    {
        $this->loadView('quemsomos');
    }

    /**
     * contato
     *
     * @return void
     */
    public function contato()
    {
        $this->loadView('contato');
    }

    /**
     * login
     *
     * @return void
     */
    public function login()
    {
        $this->loadView('login');
    }

    /**
     * criarNovaConta
     *
     * @return void
     */
    public function criarNovaConta()
    {
        $this->loadView('criarnovaconta');
    }

    /**
     * carrinhoCompras
     *
     * @return void
     */
    public function carrinhoCompras()
    {
        $this->loadView('carrinho-compras');
    }

    /**
     * carrinhoPagamento
     *
     * @return void
     */
    public function carrinhoPagamento()
    {
        $this->loadView('carrinho-pagamento');
    }

    /**
     * produtoDetalhes
     *
     * @return void
     */
    public function produtoDetalhes()
    {
        $this->loadView('produto-detalhes');
    }
}