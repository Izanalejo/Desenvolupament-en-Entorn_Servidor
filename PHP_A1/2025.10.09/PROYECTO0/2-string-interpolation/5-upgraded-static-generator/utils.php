<?php
/**
 * render_template()
 *
 * Esta función implementa un pequeño motor de plantillas en PHP.
 * Su objetivo es separar la lógica de negocio (controlador)
 * del contenido visual (vista), permitiendo renderizar archivos de plantilla
 * con datos dinámicos de forma segura y reutilizable.
 *
 * Parámetros:
 * - string $_TEMPLATE_FILENAME → nombre o ruta del archivo de plantilla (por ejemplo, 'plantillas/email.php')
 * - array $_TEMPLATE_VARS → variables que se pasarán a la plantilla en forma de array asociativo
 *
 * Retorna:
 * - string → el contenido HTML renderizado con las variables incorporadas
 */

function render_template(string $_TEMPLATE_FILENAME, array $_TEMPLATE_VARS): string {

    // 1️⃣ Convierte las claves del array en variables locales
    // Por ejemplo: ['nombre' => 'Lucía'] → crea la variable $nombre = 'Lucía'
    // EXTR_SKIP evita sobrescribir variables existentes del entorno actual
    extract($_TEMPLATE_VARS, EXTR_SKIP);

    // 2️⃣ Inicia el "buffer de salida"
    // Todo el contenido generado por 'echo', HTML o PHP dentro del require
    // será almacenado temporalmente en memoria (no se mostrará aún en el navegador)
    ob_start();

    // 3️⃣ Carga y ejecuta la plantilla indicada
    // Dado que usamos 'extract', las variables estarán disponibles dentro de la plantilla
    require($_TEMPLATE_FILENAME);

    // 4️⃣ Captura y limpia el contenido del buffer
    // ob_get_clean() devuelve el texto generado y limpia el buffer para liberar memoria
    $_RESULT = ob_get_clean();

    // 5️⃣ Devuelve el HTML resultante como una cadena
    // Esto permite almacenarlo en una variable, modificarlo o enviarlo por correo
    return $_RESULT;
}
