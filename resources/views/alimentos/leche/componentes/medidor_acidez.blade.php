<div id="infoAcidez" class="infoParte">
    <h2>Acidez</h2>
    <div class="contenedorParamfq">
        <div class="tituloParamfq">
            <h3>Medidor de acidez:</h3>
        </div>
        <label>
            <input type="range" id="acidezRango" min="10" max="25" step="0.1" value="14">
            <div id="valoresRango">
                <span id="acidezValorMov">10ºD</span>
                <span id="acidezValorFin">25ºD</span>
            </div>
        </label>
        <div id="resultadoAcidez" style="display: none;">
            <div class="contenidoResultado">
                <div id="descripcionAcidez"></div>
            </div>
        </div>
        <div id="botonesAcidez">
            <button id="cambiarAcidez">¿Qué pasa si cambia la acidez?</button>
        </div>
        <div id="cambioAcidez" style="display: none;">
            <div class="contenedorAcidez">
                <img id="imagenLecheAcidez" src="{{ asset('img/leche/leche_acidez_baja.png') }}" alt="Leche con acidez normal" width="150px" height="200px">
                <div id="informacionAcidezLeche"></div>
            </div>
        </div>
    </div>
</div>