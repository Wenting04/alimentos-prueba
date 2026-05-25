<div id="infoPH" class="infoParte">
    <h2>PH</h2>
    <div class="contenedorParamfq">
        <div class="tituloParamfq">
            <h3>Medidor de ph:</h3>
        </div>
        <label>
            <input type="range" id="phRango" min="6.4" max="8.0" step="0.1" value="6.6">
            <div id="valoresRango">
                <span id="phValorMov">6.6</span>
                <span id="phValorFin">8.0</span>
            </div>
        </label>
        <div id="resultadopH" style="display: none;">
            <div class="contenidoResultado">
                <div id="mensajePh"></div>
            </div>
        </div>
        <div id="botonesPh">
            <button id="cambiarPh">¿Qué pasa si sube o baja el pH?</button>
        </div>
    
        <div id="cambioPh" style="display: none;">
            <div class="contenedorPh">
                <img id="imagenLechePh" src="{{ asset('img/leche/leche_ph_6.5.png') }}" alt="Leche con ph bajo" width="150px" height="200px">
                <div id="informacionPhLeche"></div>
            </div>
        </div>
    </div>
</div>