<?php

namespace App\ValidatorRepository;

class Telephone
{
    /** @var string */
    private const REGEX_TELEPHONE = '/^\(\d{2}\)\s\d{2}\s\d{9}$/';

    /**
     * Validar se o telefone está em um formato válido.
     * 
     * @param string $date
     */
    public function check(string $telephone): bool
    {
        $matches = [];

        preg_match(self::REGEX_TELEPHONE, $telephone, $matches);

        return !empty($matches) ? true : false;
    }
}
