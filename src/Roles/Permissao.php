<?php

namespace App\Roles;

class Permissao
{
    /** @var string */
    protected string $nivel;

    /**
     * Método responsável por setar o nível de permissão.
     * 
     * @param string $nivel
     * 
     * @return Self
     */
    protected function setNivel(string $nivel): string
    {
        $this->nivel = $nivel;

        return $this->nivel;
    }

    /**
     * Método responsável por retornar o nível de permissão do usuário.
     * 
     * @param void
     * 
     * @return string
     */
    public function getNivel(): string
    {
        return $this->nivel;
    }
}
