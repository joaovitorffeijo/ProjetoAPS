<?php
class Colaborador{
	private $id;
    private $nome;
    private $sexo;
    private $instituicao;
    private $lattes;

    public function __construct ($id, $nome, $sexo, $instituicao, $lattes)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->instituicao = $instituicao;
        $this->lattes = $lattes;        
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

    public function getNome()
    {
        return $this->nome;
    } 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getInstituicao()
    {
        return $this->instituicao;
    }
    public function setInstituicao($instituicao)
    {
        $this->instituicao = $instituicao;

        return $this;
    }

    public function getLattes()
    {
        return $this->lattes;
    }
    public function setLattes($lattes)
    {
        $this->lattes = $lattes;

        return $this;
    }
}
?>