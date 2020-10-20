<?php

namespace App\Components;

/**
 * Podemos abstrair a lógica de renderização numa nova classe e aplicá-la à todas as tags html.
 */
class Error extends \App\Components\Renderer implements \App\Components\ComponentInterface
{
    /** @var string */
    private const STYLES = [
        "color" => "red"
    ];

    /**
     * Get Code.
     * 
     * @param void
     * 
     * @return string
     */
    public function code(): string
    {
        return $this->render("Code", $this->e->getCode(), $this->styles());
    }

    /**
     * Get Message.
     * 
     * @param void
     * 
     * @return string
     */
    public function message(): string
    {
        return $this->render("Message", $this->e->getMessage(), $this->styles());
    }

    /**
     * Render.
     * 
     * @param string $method
     * 
     * @param string $message
     * 
     * @return string
     */
    private function render(string $method, string $message, string $styles): string
    {
        return html_entity_decode("<span $styles >Error {$method}</span>: {$message} <br />");
    }

    /**
     * Styles.
     * 
     * @param void
     * 
     * @return string
     */
    private function styles(): string
    {
        return "style = \"" . $this->getProps() . "\"";
    }

    /**
     * Props.
     * 
     * @param void
     * 
     * @return string
     */
    private function getProps(): string
    {
        return implode(array_map(fn ($key, $prop) => "{$key}: {$prop}", array_keys(self::STYLES), self::STYLES));
    }
}
