<?php
/**
 * Recibe un array y convierte sus valores en una cadena de texto.
 * @param  array  $input     Array a convertir.
 * @param  string $separador Separador. Por defecto es ', '.
 * @return string            String resultante con los valores del array.
 */
function i(array $input, string $separador = ', '): string {
    return implode($separador, $input);
}
?>
