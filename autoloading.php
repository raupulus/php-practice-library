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
 * ATENCIÓN: Si las clases usan espacios de nombre no funciona bien, ya que la
 * función traslada los espacios de nombre al sistema de ficheros.
 * Sin embargo, si el espacio de nombre y la ruta del archivo coinciden sí
 * funcionará si además le cambiamos la barra.
 *
 * TODO: Comprobar si metiéndolo en una función continúa funcionando.
 */
spl_autoload_register(function($c) {
    include mb_strtolower(str_replace('\\', '/', $c)) . '.php';
});
