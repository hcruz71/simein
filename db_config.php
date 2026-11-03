<?php
// Configuracion de la base de datos, compartida por conexion.php, conexion_i_ELIMINAR.php
// y api/application/config/database.php.
// - Si se define cualquiera de DB_HOST, DB_PORT o DB_PASSWORD, deben estar las tres:
//   la app usa ese servidor (p. ej. la instancia Stackhero de la cuenta directa).
//   Si falta alguna se detiene con un error, para no mezclar credenciales de dos servidores.
// - Si no hay ninguna, usa las variables del add-on de Heroku (STACKHERO_MYSQL_*).
// DB_USER y DB_NAME son opcionales en ambos casos (root / simeindb).
if (!function_exists('simein_db_config')) {
function simein_db_config() {
    $override = array('DB_HOST' => getenv('DB_HOST'), 'DB_PORT' => getenv('DB_PORT'), 'DB_PASSWORD' => getenv('DB_PASSWORD'));
    $definidas = array_keys(array_filter($override, 'strlen'));
    if ($definidas) {
        $faltan = array_diff(array_keys($override), $definidas);
        if ($faltan) {
            $msg = 'Configuracion de base de datos incompleta: hay '.implode(', ', $definidas)
                 .' pero falta '.implode(', ', $faltan).'. Define las tres o ninguna.';
            error_log('[db_config] '.$msg);
            throw new RuntimeException($msg);
        }
        $host = $override['DB_HOST']; $port = $override['DB_PORT']; $password = $override['DB_PASSWORD'];
        $origen = 'DB_*';
    } else {
        $host = getenv('STACKHERO_MYSQL_HOST');
        $port = getenv('STACKHERO_MYSQL_PORT');
        $password = getenv('STACKHERO_MYSQL_ROOT_PASSWORD');
        $origen = 'STACKHERO_MYSQL_*';
    }
    return array(
        'host' => $host,
        'port' => $port,
        'user' => getenv('DB_USER') ?: 'root',
        'password' => $password,
        'database' => getenv('DB_NAME') ?: 'simeindb',
        'origen' => $origen,
    );
}
}
