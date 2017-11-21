<?php
/**
 * Limpia una cadena correctamente de carácteres especiales y además de comillas
 * @param  string $input Cadena a limpiar
 * @return string        Devuelve cadena limpia
 */
function h(string $input): string
{
    return htmlspecialchars($input, ENT_QUOTES | ENT_SUBSTITUTE);
}
?>
