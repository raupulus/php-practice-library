<?php

/**
 * Esta función hace un autoload de las clases que necesita un fichero para
 * evitar hacer múltiples require.
 *
 * Para que funcione bien, al crear las clases se debe seguir las normas de
 * estilo de:
 * → Una clase por fichero.
 * → El nombre del fichero es el nombre de la clase.
 *
 * TODO: Comprobar si metiéndolo en una función continúa funcionando.
 */
spl_autoload_register(function($c) {
    include mb_strtolower($c) . '.php';
});
