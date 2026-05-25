<div id="simulador">
    <div id="contenTitSim">
        <h2 class="tituloSim">Simulador Interactivo:</h2>
    </div>
    <div id="simuladorLeche">
        <div class="slider-group">
            <label>pH: <span id="pHVal">6.6</span></label>
            <input type="range" min="6.4" max="8.0" step="0.1" value="6.6" id="pHBarra">
        </div>
        <div class="slider-group">
            <label>Acidez (ºD): <span id="acVal">14</span></label>
            <input type="range" min="10" max="25" value="14" id="acicezBarra">
        </div>
        <div class="slider-group">
            <label>Densidad (g/mL): <span id="dVal">1.030</span></label>
            <input type="range" min="1.028" max="1.036" step="0.001" value="1.030" id="densidadBarra">
        </div>
        <div class="slider-group">
            <label>Temperatura (°C): <span id="tVal">6</span></label>
            <input type="range" min="2" max="40" value="6" id="temperaturaBarra">
        </div>
        <div class="status-box" id="resultado">
            <p><strong>pH:</strong> Cargando...</p>
            <p><strong>Acidez:</strong> Cargando...</p>
            <p><strong>Densidad:</strong> Cargando...</p>
            <p><strong>Temperatura:</strong> Cargando...</p>
            <p><strong>Diagnóstico global:</strong> Cargando...</p>
        </div>
    </div>
</div>