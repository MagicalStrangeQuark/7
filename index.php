<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "vendor/autoload.php";

try {
    $usuario = new \App\Usuario();

    $usuario->preencherDados("John Doe", "(55) 51 999999999", \App\Roles\Roles::USUARIO);

    $usuario->cadastrar();
} catch (\Exception $e) {

    echo (new \App\Components\Error($e))->code();

    echo (new \App\Components\Error($e))->message();

    exit();
} finally {
    $string = "<span style=\"display: block; width: 100%%; text-align: center; color: green; font-weight: bold\">%s</span>";

    printf($string, "DADOS CADASTRADOS COM SUCESSO! <br />");
}

printf("<table>
<tr>
    <th>Nome</th>
    <th>Telefone</th>
    <th>Nível</th>
    <th>Data Cadastro</th>
</tr>
<tr>
    <td>%s</td>
    <td>%s</td>
    <td>%s</td>
    <td>%s</td>
</tr>
</table>", $usuario->getNome(), $usuario->getTelefone(), $usuario->getNivel(), $usuario->getDataCadastro());
