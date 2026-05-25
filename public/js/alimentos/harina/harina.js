$(window).on("load", inicio);

function inicio() {
    // Inicializar pestañas del pescado
    $(".pestannas").tabs({
        event: "click"
    });

    /* - -- CURIOSIDADES -- - */
    // Activar tarjetas (función alojada en comun.js)
    activarTarjetas();
    /* ---------------------- */
}