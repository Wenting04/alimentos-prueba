<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3 id="criteriosTitle">Criterios Analíticos del Pescado</h3>
        </div>

        <p class="analysis-intro">
            Estos parámetros bioquímicos permiten evaluar la <strong>calidad, frescura y seguridad</strong> 
            alimentaria en productos de la pesca, cuantificando los compuestos derivados de la degradación post-mortem.
        </p>

        <div class="analysis-dashboard">

            <div class="dashboard-item">
                <i class="fas fa-vial"></i>
                <div class="item-text">
                    <span class="item-title">Control de pH</span>
                    <small>Mide acidez/alcalinidad del músculo (Frescura: 6.0-6.3)</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-bacteria"></i>
                <div class="item-text">
                    <span class="item-title">Aminas Biógenas</span>
                    <small>Histamina acumulada por descomposición bacteriana (mg/kg)</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-chart-line"></i>
                <div class="item-text">
                    <span class="item-title">Hipoxantina</span>
                    <small>Degradación del ATP celular medida mediante el Índice K</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-wind"></i>
                <div class="item-text">
                    <span class="item-title">Trimetilamina (TMA)</span>
                    <small>Volátil derivado del TMAO, causante del olor a rancio</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-flask"></i>
                <div class="item-text">
                    <span class="item-title">NBVT</span>
                    <small>Nitrógeno Básico Volátil Total (Límite: >30 mg N/100g)</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-skull-crossbones"></i>
                <div class="item-text">
                    <span class="item-title">Amoníaco (NH₃)</span>
                    <small>Gas liberado por degradación proteica avanzada</small>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3>Criterios físico-químicos y métodos de ensayo</h3>
        </div>

        <div class="physic-chem-grid">

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">01</span>
                    <h4>Control de pH</h4>
                </div>
                <div class="lab-card-body">
                    <p>Mide el grado de acidez o alcalinidad del tejido muscular. Su valor <strong>aumenta progresivamente</strong> debido a la actividad bacteriana y la degradación de las proteínas basales.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/pescado/01_medidor_pH.jpg') }}" alt="pH Pescado">
                        <span class="img-label">pH-metro digital</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-01')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">02</span>
                    <h4>Aminas Biógenas</h4>
                </div>
                <div class="lab-card-body">
                    <p>Formadas por la descarboxilación bacteriana de aminoácidos. La <strong>histamina</strong> es el marcador crítico controlado por su potencial inductivo de toxicidad alimentaria.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/pescado/02_pescados.jpg') }}" alt="Aminas Biógenas">
                        <span class="img-label">Análisis HPLC</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-02')">
                    Ver detalles<i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">03</span>
                    <h4>Hipoxantina</h4>
                </div>
                <div class="lab-card-body">
                    <p>Compuesto residual originado por la degradación autolítica del ATP post-mortem. Se calcula mediante el <strong>Índice K</strong> para determinar la frescura en fases tempranas.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/pescado/03_hipoxantina.png') }}" alt="Hipoxantina">
                        <span class="img-label">Espectrofotometría</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-03')">
                    Ver detalles<i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">04</span>
                    <h4>Trimetilamina (TMA)</h4>
                </div>
                <div class="lab-card-body">
                    <p>Procedente de la reducción del óxido de trimetilamina (TMAO) por microorganismos. Funciona como el <strong>indicador clásico</strong> de pérdida de la calidad comercial.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/pescado/04_tma.png') }}" alt="Trimetilamina">
                        <span class="img-label">Cromatografía gaseosa</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-04')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">05</span>
                    <h4>NBVT</h4>
                </div>
                <div class="lab-card-body">
                    <p>El Nitrógeno Básico Volátil Total engloba bases volátiles como amoníaco, TMA y dimetilamina. Es el <strong>parámetro legal regulado</strong> de rechazo o aceptación.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/pescado/05_pescado_descompusto.jpg') }}" alt="NBVT">
                        <span class="img-label">Destilación Kjeldahl</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-05')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">06</span>
                    <h4>Análisis de Amoníaco</h4>
                </div>
                <div class="lab-card-body">
                    <p>Gas liberado por la desaminación oxidativa avanzada de compuestos nitrogenados. Su presencia inequívoca es un indicador robusto de <strong>deterioro tisular irreversible</strong>.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/pescado/06_pescado_descompuesto.jpg') }}" alt="Amoníaco">
                        <span class="img-label">Unidad de Conway</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-06')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="modal-01" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-01')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">01</span>
            <h2>Control y Monitoreo de pH</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Aplicaciones operativas:</strong> Determinar frescura real, detectar roturas críticas en la cadena de frío y clasificar lotes según estándares comerciales.</div>
            <p>El pH mide de forma directa la estabilidad del músculo. Tras el rigor mortis, la degradación bacteriana incrementa los compuestos alcalinos, elevando el valor.</p>
            <table class="modal-table">
                <thead>
                    <tr>
                        <th>Rango de pH</th>
                        <th>Estado del Pescado</th>
                        <th>Aptitud Comercial</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>6.0 - 6.3</td>
                        <td>Muy fresco</td>
                        <td>Excelente / Consumo inmediato o procesado</td>
                    </tr>
                    <tr>
                        <td>6.8 - 6.9</td>
                        <td>Inicio de deterioro</td>
                        <td>Límite tolerable bajo estricta vigilancia</td>
                    </tr>
                    <tr>
                        <td>&ge; 7.0</td>
                        <td>No apto</td>
                        <td>Rechazo obligatorio de la carga</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="modal-02" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-02')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">02</span>
            <h2>Análisis de Aminas Biógenas</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Dinámica química:</strong> Se forman mediante la descarboxilación bacteriana de los aminoácidos libres presentes en el tejido del pez muerto.</div>
            <p><strong>Técnicas instrumentales utilizadas:</strong></p>
            <ul style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                <li><strong>Cromatografía Líquida (HPLC):</strong> Gold standard para identificar y cuantificar con precisión absoluta cada amina aislada.</li>
                <li><strong>Cromatografía de Gases:</strong> Aplicable tras un proceso previo de derivatización de compuestos volátiles.</li>
                <li><strong>Métodos Enzimáticos / Espectrofotométricos:</strong> Ensayos rápidos y optimizados para tamizajes rápidos en plantas de recepción.</li>
            </ul>
            <p style="margin-top: 15px;">La cuantificación se expresa en <strong>mg/kg</strong> y se enfoca en el control estricto de la histamina para prevenir brotes epidémicos de escombroismo.</p>
        </div>
    </div>
</div>

<div id="modal-03" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-03')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">03</span>
            <h2>Análisis de Hipoxantina (Índice K)</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Marcador temprano:</strong> Monitorea la degradación autolítica del trifosfato de adenosina (ATP) celular en el músculo.</div>
            <p>El <strong>Índice K</strong> establece una relación porcentual directa entre los nucleótidos frescos originales y sus metabolitos degradados finales:</p>
            <p style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                Valores altos de Hipoxantina / Índice K = Menor frescura intrínseca.
            </p>
            <p><strong>Determinación analítica:</strong> Se procesa principalmente mediante cromatografía líquida de alta resolución (HPLC) o espectrofotometría ultravioleta para calcular la concentración en porcentaje relativo.</p>
        </div>
    </div>
</div>

<div id="modal-04" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-04')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">04</span>
            <h2>Determinación de Trimetilamina (TMA)</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Mecanismo:</strong> El óxido de trimetilamina (TMAO), un osmorregulador natural, se reduce a TMA volátil por acción de bacterias alterantes.</div>
            <table class="modal-table">
                <thead>
                    <tr>
                        <th>Nivel de TMA</th>
                        <th>Interpretación del Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Baja Concentración</td>
                        <td>Pescado óptimo y fresco; capturado recientemente.</td>
                    </tr>
                    <tr>
                        <td>Moderada Concentración</td>
                        <td>Pérdida incipiente de calidad organoléptica; consumo a corto plazo.</td>
                    </tr>
                    <tr>
                        <td>Alta Concentración</td>
                        <td>Pescado deteriorado, rancio y completamente descartable.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="modal-05" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-05')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">05</span>
            <h2>Nitrógeno Básico Volátil Total (NBVT)</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Indicador Global:</strong> Mide el agregado neto de amoníaco, trimetilamina y dimetilamina presentes en la muestra.</div>
            <p><strong>Factores críticos de variabilidad:</strong></p>
            <ul style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                <li><strong>Temperatura de almacenamiento:</strong> Deficiencias térmicas aceleran drásticamente su incremento.</li>
                <li><strong>Tipo de especie:</strong> Los pescados grasos/azules suelen exhibir curvas de deterioro más veloces.</li>
                <li><strong>Manipulación post-captura:</strong> Traumas físicos en el tejido aceleran la invasión bacteriana.</li>
            </ul>
            <table class="modal-table">
                <thead>
                    <tr>
                        <th>Parámetro NBVT</th>
                        <th>Interpretación Higiénica</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5 – 15 mg N / 100 g</td>
                        <td>Pescado fresco y de alta calidad.</td>
                    </tr>
                    <tr>
                        <td>> 30 mg N / 100 g</td>
                        <td>Muestra deteriorada; rechazo normativo legal.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="modal-06" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-06')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">06</span>
            <h2>Análisis de Amoníaco (NH₃)</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Química analítica:</strong> Liberado de forma masiva durante las etapas tardías de desaminación proteica.</div>
            <p><strong>Metodologías oficiales de laboratorio:</strong> Método de microdifusión de Conway, Espectrofotometría directa de absorbancia o acoplamiento de variaciones del Método Kjeldahl modificado.</p>
            <table class="modal-table">
                <thead>
                    <tr>
                        <th>Concentración de NH₃</th>
                        <th>Aptitud Sanitaria</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>&lt; 10 mg NH₃ / 100 g</td>
                        <td>Producto muy fresco.</td>
                    </tr>
                    <tr>
                        <td>10 – 20 mg NH₃ / 100 g</td>
                        <td>Fresco / Límite aceptable de consumo.</td>
                    </tr>
                    <tr>
                        <td>> 30 mg NH₃ / 100 g</td>
                        <td>No apto para consumo humano.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- SIMULADOR deterioro -->
@include('alimentos.pescado.componentes.simuladorDeterioro')

<!-- Criterios microbiológicos y enzimáticos -->
<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3>Pescado fresco y con deficiencia</h3>
        </div>

        <div class="accordion-group">
            <div id="imgInfoParamQui">
                <h3 class="infoParamQuiTit">Pescado Fresco</h3>
                <div class="image-placeholder">
                    <img src="{{ asset('img/pescado/pescadoFresco1.jpg') }}" alt="Pescado fresco">
                </div>
                <h3>Pescado con Deficiencia</h3>
                <div class="image-placeholder">
                    <img src="{{ asset('img/pescado/pescadoDeficiencia1.jpg') }}" alt="Pescado con deficiencia">
                </div>
            </div>
        </div>
    </div>
</div>