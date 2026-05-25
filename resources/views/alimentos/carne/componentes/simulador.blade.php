<div id="contenSliderPh">
    <h3>SIMULADOR DE pH EN TIEMPO POST MORTEM</h3>
    <h4>Tiempo transcurrido desde el sacrificio (horas/min):</h4>
    <label>
        <input type="range" id="horasRango" min="0" max="24" step="0.25" value="4">
        <div id="valoresRango">
            <span id="horasValorMov">4 h</span>
            <span id="horasValorFin">24 h</span>
        </div>
    </label>
    <div id="resultadoSliderPh">
        <h4>Efectos en la carne:</h4>
        <ul>
            <li>pH estimado: <span id="phCarne"></span></li>
            <li>Estado de la carne: <span id="estadoCarne"></span></li>
            <li>Riesgo bacteriano: <span id="riesgoBacteriano"></span></li>
        </ul>
    </div>
    <div class="botonesInfoPh">
        <button id="botonDfd" class="botonpH">¿Cuándo hay riesgo de DFD?</button>
        <button id="botonPse" class="botonpH">¿Cuándo hay riesgo de PSE?</button>
    </div>
    <div id="infoExtra"></div>
</div>