<?php

function logout() {
    session_start();
    $_SESSION = [];

    // Devuelve un array asociativo con los valores de la cookie de sesión.
    $params = session_get_cookie_params();

    setcookie(
        session_name(),         // Nombre
        '',                     // Valor
        1,                      // Tiempo de expiración (1970-01-01 00:00:01)
        $params['path'],        // Ruta
        $params['domain'],      // Dominio
        $params['secure'],      // Secure
        $params['httponly']     // httponly
    );
}
