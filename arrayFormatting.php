<?php
/**
 * Recibe un array y lo convierte en una cadena de texto.
 * @param  array  $input     Array a convertir.
 * @param  string $separador Separador (por defecto es ', ').
 * @return string            String resultante
 */
function i(array $input, string $separador = ', '): string {
    return implode($separador, $input);
}
?>
