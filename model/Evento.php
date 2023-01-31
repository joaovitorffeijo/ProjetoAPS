<?php
class Evento{
    private $id;
    private $nome;
    private $data;
    private $descricao;
    private $link;
    private $tipo;
    private $cadastradoPor;

    public function __construct($id, $nome, $data, $descricao, $link, $tipo, $cadastradoPor) {
        $this->id = $id;
        $this->nome = $nome;
        $this->data = $data;
        $this->descricao = $descricao;
        $this->link = $link;
        $this->tipo = $tipo;
        $this->cadastradoPor = $cadastradoPor;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;

        return $this;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;

        return $this;
    }

    public function getData() {
        return $this->data;
    } 
    public function setData($data) {
        $this->data = $data;

        return $this;
    }

    public function getDescricao() {
        return $this->descricao;
    }
    public function setDescricao($descricao) {
        $this->descricao = $descricao;

        return $this;
    }

    public function getLink() {
        return $this->link;
    }
    public function setLink($link) {
        $this->link = $link;

        return $this;
    }

    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;

        return $this;
    }
 
    public function getCadastradoPor() {
        return $this->cadastradoPor;
    }
    public function setCadastradoPor($cadastradoPor) {
        $this->cadastradoPor = $cadastradoPor;

        return $this;
    }
}
?>