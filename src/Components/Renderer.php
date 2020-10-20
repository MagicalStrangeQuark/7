<?php

namespace App\Components;

class Renderer
{
    /** @var \Exception */
    protected \Exception $e;

    /**
     * Constructor Method.
     * 
     * @param \Exception $e
     */
    public function __construct(\Exception $e)
    {
        $this->e = $e;
    }
}
