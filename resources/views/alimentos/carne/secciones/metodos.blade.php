<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3 id="criteriosTitle">Criterios Analíticos de la Carne</h3>
        </div>

        <p class="analysis-intro">
            Estos parámetros permiten evaluar de forma rigurosa el <strong>estado higiénico, sanitario y tecnológico</strong> del tejido muscular, previniendo riesgos microbiológicos y asegurando la aptitud comercial del producto.
        </p>

        <div class="analysis-dashboard">

            <div class="dashboard-item">
                <i class="fas fa-vial"></i>
                <div class="item-text">
                    <span class="item-title">Análisis de pH</span>
                    <small>Evalúa frescura, evolución post-mortem y anomalías (Normal: 5.4-5.7)</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-droplet"></i>
                <div class="item-text">
                    <span class="item-title">Actividad de Agua (Aw)</span>
                    <small>Mide el agua disponible para la proliferación y deterioro bacteriano</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-compress-arrows-alt"></i>
                <div class="item-text">
                    <span class="item-title">CRA (Retención de Agua)</span>
                    <small>Determina de forma directa la jugosidad, la textura y el rendimiento</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-bolt"></i>
                <div class="item-text">
                    <span class="item-title">Conductividad Eléctrica</span>
                    <small>Indicador indirecto de ruptura celular y alteraciones tisulares</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-eye"></i>
                <div class="item-text">
                    <span class="item-title">Evaluación Sensorial (ICO)</span>
                    <small>Inspección organoléptica crítica de color, olor y textura externa</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-shield-halved"></i>
                <div class="item-text">
                    <span class="item-title">Contaminantes Abióticos</span>
                    <small>Monitoreo de residuos químicos industriales, del suelo o del agua</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-file-shield"></i>
                <div class="item-text">
                    <span class="item-title">Plan Nacional de Residuos</span>
                    <small>Garantiza el cumplimiento estricto de los límites legales sanitarios</small>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3>Métodos de Ensayo Físico-Químicos y Tecnológicos</h3>
        </div>

        <div class="physic-chem-grid">

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">01</span>
                    <h4>Determinación de pH</h4>
                </div>
                <div class="lab-card-body">
                    <p>Monitorea la <strong>glucólisis post-mortem</strong>. Su control desde el matadero es vital, ya que valores fuera de rango alertan sobre carnes PSE o DFD defectuosas.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/carne/ph_metro.jpg') }}" alt="Medición de pH en carne">
                        <span class="img-label">Electrodo de Penetración</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-carne-01')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">02</span>
                    <h4>Capacidad de Retención (CRA)</h4>
                </div>
                <div class="lab-card-body">
                    <p>Mide la aptitud de la carne para <strong>retener su agua constitucional</strong> bajo fuerzas externas. Afecta directamente a la merma industrial y jugosidad gástrica.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/carne/agua_en_carne.jpg') }}" alt="Diferencia de carne con más agua y menos">
                        <span class="img-label">Método de Prensado / Centrifugación</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-carne-02')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">03</span>
                    <h4>Conductividad Eléctrica</h4>
                </div>
                <div class="lab-card-body">
                    <p>Evalúa el flujo de corriente en el músculo. Una conductividad elevada indica <strong>ruptura de membranas celulares</strong> y liberación acelerada de electrolitos.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/carne/carne_picada.jpg') }}" alt="Carne picada y sin picar">
                        <span class="img-label">Sonda de Conductividad</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-carne-03')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">04</span>
                    <h4>Evaluación ICO</h4>
                </div>
                <div class="lab-card-body">
                    <p>Método de screening inmediato basado en caracteres organolépticos. Examina las variaciones cromáticas de la <strong>mioglobina, texturas y olores anómalos</strong>.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/carne/carne_calidad.jpg') }}" alt="Analizando calidad de la carne">
                        <span class="img-label">Atributos de Calidad</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-carne-04')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

        </div>
    </div>
</div>


<div id="modal-carne-01" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-carne-01')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">01</span>
            <h2>Análisis de pH y Dinámica Post-Mortem</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Instrumentación:</strong> pH-metro digital portátil, electrodo punzón de penetración calibrado y soluciones tampón (pH 4.0 y 7.0).</div>
            
            <p>El pH influye transversalmente en el desarrollo microbiano, las alteraciones físicas y la estabilidad química del alimento durante el almacenamiento.</p>

            <div class="image-placeholder">
                <img src="{{ asset('img/carne/microbios.png') }}" alt="Microbios en carne">
            </div>

            <table class="modal-table">
                <thead>
                    <tr>
                        <th>Rango de pH</th>
                        <th>Estado de la Carne</th>
                        <th>Propiedades y Aptitud Tecnológica</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>5.4 - 5.7</strong></td>
                        <td>Maduración Normal</td>
                        <td>Evolución óptima. Correcta terneza, color rojo brillante y adecuada vida útil.</td>
                    </tr>
                    <tr>
                        <td><strong>&lt; 5.4 (Caída rápida)</strong></td>
                        <td>Defecto PSE</td>
                        <td>Carne pálida, blanda y marcadamente exudativa. Baja CRA; no apta para embutidos cocidos.</td>
                    </tr>
                    <tr>
                        <td><strong>&gt; 6.2 (Estable)</strong></td>
                        <td>Defecto DFD</td>
                        <td>Carne oscura, firme y seca. Elevada susceptibilidad microbiológica; vida útil muy limitada.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="modal-carne-02" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-carne-02')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">02</span>
            <h2>Parámetros Hídricos: CRA y Actividad de Agua (Aw)</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Metodologías:</strong> Prensado en papel de filtro (Grau-Hamm), centrifugación de baja velocidad e higrómetros de punto de rocío para Aw.</div>
            
            <p><strong>Factores determinantes de las propiedades hídricas:</strong></p>
            <ul style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                <li>
                    <h3>pH muscular:</h3> Al acercarse al punto isoeléctrico de las proteínas miofibrilares, la CRA disminuye drásticamente.
                    <div class="image-placeholder">
                        <img src="{{ asset('img/carne/pH_carne.jpg') }}" alt="pH del músculo">
                    </div>
                </li>
                <li>
                    <h3>Estructura del músculo:</h3> El grado de contracción de los sarcómeros altera el espacio disponible para el agua libre.
                    <div class="image-placeholder">
                        <img src="{{ asset('img/carne/estructura_musculo.jpg') }}" alt="Estructura del músculo">
                    </div>
                </li>
                <li>
                    <h3>Rigor Mortis:</h3> La formación irreversible de puentes de actomiosina expulsa fluidos al espacio extracelular.
                    <div class="image-placeholder">
                        <img src="{{ asset('img/carne/rigor_mortis.jpg') }}" alt="Estructura del músculo">
                    </div>
                </li>
            </ul>

            <p><strong>Técnicas de laboratorio para su medición:</strong></p>
            <ul style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                <li><strong>Prueba de Prensado:</strong> Compresión mecánica controlada de una muestra sobre papel de filtro para calcular el área del anillo de exudación de líquido libre.</li>
                <li><strong>Método de Centrifugación:</strong> Sometimiento de la muestra a giros rápidos en tubos graduados para cuantificar volumétricamente el porcentaje de agua desprendida.</li>
            </ul>

            <div class="image-placeholder">
                <img src="{{ asset('img/carne/prensado.png') }}" alt="Prensado de carne">
            </div>
        </div>
    </div>
</div>

<div id="modal-carne-03" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-carne-03')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">03</span>
            <h2>Análisis de Conductividad Eléctrica</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Aparataje:</strong> Conductivímetro multiaguja industrial con compensación automática de temperatura.</div>
            <p>La conductividad mide de forma indirecta las alteraciones moleculares y la integridad de las membranas celulares del tejido cárnico.</p>
            
            <table class="modal-table">
                <thead>
                    <tr>
                        <th>Nivel de Conductividad</th>
                        <th>Interpretación Tisular</th>
                        <th>Estado Fisiológico</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Conductividad Baja</td>
                        <td>Membranas intactas, retención iónica interna adecuada.</td>
                        <td>Carne fresca, sana y con maduración correcta.</td>
                    </tr>
                    <tr>
                        <td>Conductividad Alta</td>
                        <td>Lisis celular, salida masiva de sales minerales y agua al espacio intersticial.</td>
                        <td>Muestra deteriorada, envejecida o con anomalías metabólicas severas.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="modal-carne-04" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-carne-04')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">04</span>
            <h2>Evaluación Organoléptica y Control de Contaminantes</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Marco Regulatorio:</strong> Plan Nacional de Investigación de Residuos (PNIR) y paneles analíticos normalizados.</div>
            
            <p><strong>Evaluación de Atributos Críticos (ICO):</strong></p>
            <ul style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                <li>
                    <h3>Color:</h3> Parámetro primario de compra ligado al estado oxidativo de la mioglobina (Rojo brillante/Oximioglobina vs Marrón/Metamioglobina).
                    <div class="image-placeholder">
                    <img src="{{ asset('img/carne/color_carne.png') }}" alt="Color de la carne">
                    </div>
                </li>
                <li>
                    <h3>Olor:</h3> Screening inmediato que permite discriminar la degradación proteica volátil y descartar de forma temprana piezas alteradas.
                    <div class="image-placeholder">
                        <img src="{{ asset('img/carne/olor_carne.jpg') }}" alt="Olor de la carne">
                    </div>
                </li>
                <li>
                    <h3>Textura:</h3> Examinada visualmente y por palpe, ligada a la red de colágeno, edad del animal, grasa intramuscular y grado de maduración.
                    <div class="image-placeholder">
                        <img src="{{ asset('img/carne/textura_carne.png') }}" alt="Textura de la carne">
                    </div>
                </li>
            </ul>

            <p><strong>Control Sanitario de Sustancias Químicas (PNIR):</strong></p>
            <p style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                Investiga y detecta sistemáticamente la presencia de contaminantes abióticos procedentes del entorno industrial, suelos acondicionados o aguas contaminadas. Este estricto control veterinario oficial garantiza que ningún derivado cárnico sobrepase los límites máximos de residuos (LMR), protegiendo la salud pública del consumidor.
            </p>
        </div>
    </div>
</div>

<!-- Otros -->
<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3>Actividades interactivas</h3>
        </div>

        <div class="accordion-group">
            <!-- CHECKLIST -->
            <details class="accordion">

                <summary>
                    <h3>Test</h3>
                </summary>

                <div class="accordion-content">
                    <!-- Simulador -->
                    @include('alimentos.carne.componentes.checklist')
                </div>

            </details>
        </div>
    </div>
</div>