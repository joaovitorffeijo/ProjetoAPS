<?php
class Artigo{
	private $id;
    private $titulo;
    private $abnt;
    private $abstract;
    private $resumo;
    private $pdf;
    private $ref_bibliograficas;
    private $data_de_publicacao;
    private $id_evento;
    private $id_trilha;
    private $cadastrado_por;

    public function __construct ($id, $titulo, $abnt, $abstract, $resumo, $pdf, $ref_bibliograficas, $data_de_publicacao, $id_evento, $id_trilha, $cadastrado_por)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->abnt = $abnt;
        $this->abstract = $abstract;
        $this->resumo = $resumo;
        $this->pdf = $pdf;
        $this->ref_bibliograficas = $ref_bibliograficas;
        $this->data_de_publicacao = $data_de_publicacao;
        $this->id_evento = $id_evento;
        $this->id_trilha = $id_trilha;
        $this->cadastrado_por = $cadastrado_por;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAbnt()
    {
        return $this->abnt;
    }

    public function setAbnt($abnt)
    {
        $this->abnt = $abnt;

        return $this;
    }

    public function getAbstract()
    {
        return $this->abstract;
    }

    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;

        return $this;
    }

    public function getResumo()
    {
        return $this->resumo;
    }

    public function setResumo($resumo)
    {
        $this->resumo = $resumo;

        return $this;
    }

    public function getPdf()
    {
        return $this->pdf;
    }

    public function setPdf($pdf)
    {
        $this->pdf = $pdf;

        return $this;
    }

    public function getRefBibliograficas()
    {
        return $this->refBibliograficas;
    }

    public function setRefBibliograficas($refBibliograficas)
    {
        $this->refBibliograficas = $refBibliograficas;

        return $this;
    }

    public function getDataDePublicacao()
    {
        return $this->dataDePublicacao;
    }

    public function setDataDePublicacao($dataDePublicacao)
    {
        $this->dataDePublicacao = $dataDePublicacao;

        return $this;
    }

    public function getIdEvento()
    {
        return $this->idEvento;
    }

    public function setIdEvento($idEvento)
    {
        $this->idEvento = $idEvento;

        return $this;
    }
    
    public function getIdTrilha()
    {
        return $this->idTrilha;
    }

    public function setIdTrilha($idTrilha)
    {
        $this->idTrilha = $idTrilha;

        return $this;
    }
    
    public function getCadastradoPor()
    {
        return $this->cadastradoPor;
    }

    public function setCadastradoPor($cadastradoPor)
    {
        $this->cadastradoPor = $cadastradoPor;

        return $this;
    }
}
?>