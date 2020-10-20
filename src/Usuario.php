<?php

namespace App;

class Usuario extends \App\Roles\Permissao
{
    /** @var string */
    private string $telefone;

    /** @var string */
    private string $data_cadastro;

    /** @var string */
    private string $nome;

    /**
     * Método responsável pelo cadastro do usuário.
     * 
     * @param void
     */
    public  function cadastrar(): Self
    {
        if (empty($this->nome)) {
            throw new \Exception("O nome não foi preenchido corretamente");
        }

        if (empty($this->telefone)) {
            throw new \Exception("O telefone não foi preenchido corretamente");
        }

        if (empty($this->nivel)) {
            throw new \Exception("O nível não foi preenchido corretamente");
        }

        if ((new \App\ValidatorRepository\Telephone())->check($this->telefone) === false) {
            throw new \Exception("O telefone não está num formato válido");
        }

        $this->data_cadastro = date("d/m/Y H:i:s");

        return $this;
    }

    public  function preencherDados(
        string $nome,
        string $telefone,
        string $nivel
    ): Self {
        $this->telefone = $telefone;
        $this->nome = $nome;

        $this->nivel = $this->setNivel($nivel);

        return $this;
    }

    /**
     * Método responsável pelo retorno do número do telefone do usuário.
     * 
     * @param void
     */
    public  function getTelefone(): string
    {
        return $this->telefone;
    }

    /**
     * Método responsável pelo retorno da data de castro do usuário.
     * 
     * @param void
     */
    public  function getDataCadastro(): string
    {
        return $this->data_cadastro;
    }
    /**
     * Método responsável pelo retorno do nome do usuário.
     * 
     * @param void
     */
    public function getNome(): string
    {
        return $this->nome;
    }
}
