
<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3>🧪 Simulador de Deterioro Químico</h3>
        </div>

        <div class="simulador">
            <h4>Días post-captura:</h4>
            <label>
                <input type="range" id="diasRango" min="0" max="10" step="1" value="0">
                <div id="valoresRango">
                    <span id="diasValorMov">Día 0</span>
                    <span id="diasValorFin">Día 10</span>
                </div>
            </label>
            <table>
            <thead>
                <tr>
                <th>Parámetro</th>
                <th>Valor</th>
                <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>BVT (mg N/100g)</td>
                <td id="bvtValor">5</td>
                <td id="bvtEstado" class="estadoNormal">Normal</td>
                </tr>
                <tr>
                <td>Amoniaco (mg)</td>
                <td id="amoniacoValor">2</td>
                <td id="amoniacoEstado" class="estadoNormal">Normal</td>
                </tr>
                <tr>
                <td>TMA (mg)</td>
                <td id="tmaValor">1</td>
                <td id="tmaEstado" class="estadoNormal">Normal</td>
                </tr>
                <tr>
                <td>pH</td>
                <td id="phValor">6.8</td>
                <td id="phEstado" class="estadoNormal">Normal</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>