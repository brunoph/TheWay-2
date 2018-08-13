<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/07/18
 * Time: 13:29
 */

class Caminhao
{
    public $cod_caminhao;
    public $ano_modelo;
    public $ano_fabricacao;
    public $capacidade;
    public $cod_modelo;
    public $cod_tipo;

    public function __construct($cod_caminhao, $ano_modelo, $ano_fabricacao, $capacidade, $cod_modelo, $cod_tipo)
    {

        $this->cod_caminhao = $cod_caminhao;
        $this->ano_modelo = $ano_modelo;
        $this->ano_fabricacao= $ano_fabricacao;
        $this->capacidade = $capacidade;
        $this->cod_modelo = $cod_modelo;
        $this->cod_tipo = $cod_tipo;
    }
}