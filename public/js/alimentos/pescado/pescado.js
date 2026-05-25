// Activar tarjetas (función alojada en comun.js)
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

    /* - -- SIMULADOR -- - */
    // Evento para detectar el movimiento del control deslizante
    $("#diasRango").on("input", function(event) {
        actualizarValorSlider(event);
        actualizarResultadoSlider($(this).val());
    });
    // Disparar el evento inicialmente para renderizar el Día 0 al cargar la página
    $("#diasRango").trigger("input");
    /* ------------------- */

    /* - -- TEST/EXAMEN -- - */
    $("#botonCorregir").on("click", corregirChecklist);
    $("#botonVolverEmp").on("click", reiniciarChecklist);
    /* --------------------- */
}


/* ============= */
/* = Simulador = */
/* ============= */

/**
 * Ajusta dinámicamente el gradiente de fondo del input range según su avance.
 */
function actualizarValorSlider(event) {
    let barra = $(event.target);

    let valor = parseFloat(barra.val());
    let min = parseFloat(barra.attr("min"));
    let max = parseFloat(barra.attr("max"));

    let porcentaje = ((valor - min) / (max - min)) * 100;

    let colorIzquierda = "#6e8192";
    let colorDerecha = "#ddd";

    barra.css("background", `linear-gradient(to right, ${colorIzquierda} 0%, ${colorIzquierda} ${porcentaje}%, ${colorDerecha} ${porcentaje}%, ${colorDerecha} 100%)`);
}

/**
 * Realiza los cálculos de los parámetros químicos y actualiza el texto y las clases de la tabla.
 */
function actualizarResultadoSlider(dias) {
    let dia = parseInt(dias);
    $("#diasValorMov").text("Día " + dia);  

    // --- BVT ---
    let bvt = 5 + (35 * dias / 10);
    let bvtEstado = getEstado(bvt, {normal: 15, moderado: 30});

    $("#bvtValor").text(bvt.toFixed(1));
    $("#bvtEstado")
        .text(bvtEstado)
        .attr("class", "estado" + bvtEstado);

    // --- Amoniaco ---
    let amoniaco;
    if (dias < 3) {
        amoniaco = 2;
    } else if (dias > 10) {
        amoniaco = 25;
    } else {
        amoniaco = 2 + (23 * (dias - 3) / 7);
    }

    let amoniacoEstado = getEstado(amoniaco, {normal: 8, moderado: 18});

    $("#amoniacoValor").text(amoniaco.toFixed(1));
    $("#amoniacoEstado")
        .text(amoniacoEstado)
        .attr("class", "estado" + amoniacoEstado);

    // --- TMA ---
    let tma;
    if (dias < 2) {
        tma = 1;
    } else if (dias > 10) {
        tma = 18;
    } else {
        tma = 1 + (17 * (dias - 2) / 8);
    }

    let tmaEstado = getEstado(tma, {normal: 5, moderado: 12});

    $("#tmaValor").text(tma.toFixed(1));
    $("#tmaEstado")
        .text(tmaEstado)
        .attr("class", "estado" + tmaEstado);

    // --- pH (6.8 a 6.1) ---
    let ph = 6.8 - (0.7 * dias / 10);
    if (ph < 6.1) {
        ph = 6.1;
    }

    let phEstado;
    if (ph >= 6.5) {
        phEstado = 'Normal';
    } else if (ph >= 6.2) {
        phEstado = 'Moderado';
    } else {
        phEstado = 'Critico';
    }

    $("#phValor").text(ph.toFixed(2));
    $("#phEstado")
        .text(phEstado)
        .attr("class", "estado" + phEstado);
}

/**
 * Devuelve la etiqueta de estado basada en los límites establecidos.
 */
function getEstado(value, niveles) {
    let estado = 'Critico'; 

    if (value <= niveles.normal) {
        estado = 'Normal';
    } else if (value <= niveles.moderado) {
        estado = 'Moderado';
    }

    return estado;
}


/* ================= */
/* = Test / Examen = */
/* ================= */
function corregirChecklist() {
    let total = 0;
    const casos = document.querySelectorAll(".contendorPregunta");

    casos.forEach(caso => {
        const radio = caso.querySelector("input[type='radio']:checked");
        const explicacion = caso.querySelector(".expCaso");
        const correcta = caso.querySelector("input.correcta");

        // Resetear estilos
        caso.querySelectorAll("label").forEach(label => {
            label.classList.remove("correctaAcertada", "incorrectaMarcada", "correctaNoMarcada");
        });

        // Mostrar explicación
        if (explicacion) explicacion.style.display = "block";

        if (radio) {
            const esCorrecta = radio.classList.contains("correcta");
            radio.parentElement.classList.add(esCorrecta ? "correctaAcertada" : "incorrectaMarcada");
            total += esCorrecta ? 1 : -1;
        } else if (correcta) {
            correcta.parentElement.classList.add("correctaNoMarcada");
        }
    });

    $("#resultado").html(`<p>Puntuación final: ${total}/${casos.length}</p>`).fadeIn();
}

function reiniciarChecklist() {
    $("input[type='radio']").prop("checked", false);
    $("label").removeClass("correctaAcertada incorrectaMarcada correctaNoMarcada");
    $(".expCaso").hide();
    $("#resultado").hide();
}