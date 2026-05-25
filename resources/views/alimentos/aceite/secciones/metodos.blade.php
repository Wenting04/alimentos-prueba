<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3 id="criteriosTitle">Criterios Analíticos del AOVE</h3>
        </div>

        <p class="analysis-intro">
            Estos parámetros, basados en normativas europeas y nacionales, regulan desde la extracción hasta la comercialización para evaluar la 
            <strong>calidad, pureza y estabilidad</strong> del aceite, detectando fraudes o degradaciones.
        </p>

        <div class="analysis-dashboard">
            <div class="dashboard-item">
                <i class="fas fa-flask"></i>
                <div class="item-text">
                    <span class="item-title">Índice de acidez</span>
                    <small>Mide el deterioro libre de los ácidos grasos (rancidez)</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-circle-exclamation"></i>
                <div class="item-text">
                    <span class="item-title">Índice de peróxidos</span>
                    <small>Evalúa el estado de oxidación inicial y frescura</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-soap"></i>
                <div class="item-text">
                    <span class="item-title">Saponificación</span>
                    <small>Determina los mg de KOH para estimar la composición grasa</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-eye"></i>
                <div class="item-text">
                    <span class="item-title">Índice de anisidina</span>
                    <small>Detecta compuestos de la oxidación secundaria</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-weight-scale"></i>
                <div class="item-text">
                    <span class="item-title">Densidad</span>
                    <small>Masa por unidad de volumen según el tipo de aceite</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-droplet-slash"></i>
                <div class="item-text">
                    <span class="item-title">Viscosidad</span>
                    <small>Fluidez ligada a la composición y procesos térmicos</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-bolt"></i>
                <div class="item-text">
                    <span class="item-title">Índice de refracción</span>
                    <small>Garante físico esencial de pureza frente a adulteraciones</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-wave-square"></i>
                <div class="item-text">
                    <span class="item-title">Prueba K232</span>
                    <small>Absorción UV para detectar oxidación primaria y dienos</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-chart-line"></i>
                <div class="item-text">
                    <span class="item-title">Prueba K270</span>
                    <small>Identifica compuestos de enranciamiento y rectificados</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-calculator"></i>
                <div class="item-text">
                    <span class="item-title">Delta K / Valores S-K</span>
                    <small>Cálculos estadísticos de precisión y calidad global</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3>Criterios Físico-Químicos y Espectrofotométricos</h3>
        </div>

        <div class="physic-chem-grid">
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">01</span>
                    <h4>Análisis Químicos</h4>
                </div>
                <div class="lab-card-body">
                    <p>Evalúan las alteraciones internas del AOVE. Incluye parámetros clave como el <strong>índice de acidez</strong> (rancidez) y el <strong>índice de peróxidos</strong> para monitorizar la estabilidad lipídica.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/aceite/analisis_quimico.png') }}" alt="Análisis Químico">
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-quimico')">
                    Ver tabla de índices <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">02</span>
                    <h4>Análisis Físicos</h4>
                </div>
                <div class="lab-card-body">
                    <p>Determinan las constantes estructurales de la materia grasa. La <strong>densidad, viscosidad y el índice de refracción</strong> permiten tipificar el aceite y aislar fraudes por mezclas ilegales.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/aceite/analisis_fisico.png') }}" alt="Análisis Físico">
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-fisico')">
                    Ver constantes físicas <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">03</span>
                    <h4>Prueba K<sub>232</sub></h4>
                </div>
                <div class="lab-card-body">
                    <p>Mide la absorción ultravioleta para delatar la <strong>oxidación primaria</strong>. Un valor alto apunta a malas prácticas en la cosecha o sobrecalentamiento en la almazara.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/aceite/k232.jpg') }}" alt="Prueba K232">
                        <span class="img-label">Oxidación Primaria</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-k232')">
                    Ver factores de riesgo <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">04</span>
                    <h4>Prueba K<sub>270</sub> y Delta K</h4>
                </div>
                <div class="lab-card-body">
                    <p>Identifica la <strong>oxidación secundaria</strong> (enranciamiento maduro) y resulta infalible para desenmascarar la adición fraudulenta de aceites rectificados industriales.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/aceite/k270.jpg') }}" alt="Prueba K270">
                        <span class="img-label">Detección de Fraudes</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-k270')">
                    Ver fórmulas y variables <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal-quimico" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-quimico')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">01</span>
            <h2>Parámetros Químicos del Aceite</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Clasificación:</strong> Criterios Fisicoquímicos Regulados.</div>
            <p>Monitoreo analítico de la degradación lipídica e hidrólisis ácida:</p>
            <table class="modal-table">
                <thead>
                    <tr>
                        <th>Parámetro</th>
                        <th>Qué mide</th>
                        <th>Significado Clínico / Comercial</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Índice de acidez</strong></td>
                        <td>Deterioro de los ácidos grasos libres</td>
                        <td>Indica el grado de degradación, alteración o rancidez</td>
                    </tr>
                    <tr>
                        <td><strong>Índice de peróxidos</strong></td>
                        <td>Oxidación inicial del aceite</td>
                        <td>Evalúa el estado de frescura y estabilidad temporal</td>
                    </tr>
                    <tr>
                        <td><strong>Índice de saponificación</strong></td>
                        <td>Cantidad de KOH requerida para saponificar las grasas</td>
                        <td>Estima el peso molecular promedio y composición de ácidos grasos</td>
                    </tr>
                    <tr>
                        <td><strong>Índice de anisidina</strong></td>
                        <td>Presencia de aldehídos y cetonas</td>
                        <td>Detecta niveles de oxidación secundaria (aceites parcialmente oxidados)</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="modal-fisico" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-fisico')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">02</span>
            <h2>Análisis y Constantes Físicas</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Instrumentación:</strong> Densímetros, viscosímetros y refractómetros de precisión.</div>
            <table class="modal-table">
                <thead>
                    <tr>
                        <th>Parámetro Físico</th>
                        <th>Qué mide</th>
                        <th>Significado Analítico</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Densidad</strong></td>
                        <td>Masa por unidad de volumen</td>
                        <td>Permite identificar y clasificar el tipo de aceite vegetal</td>
                    </tr>
                    <tr>
                        <td><strong>Viscosidad</strong></td>
                        <td>Fluidez interna del fluido graso</td>
                        <td>Delata la naturaleza de su composición y variaciones por procesos</td>
                    </tr>
                    <tr>
                        <td><strong>Índice de refracción</strong></td>
                        <td>Desviación de la luz al cruzar el medio</td>
                        <td>Parámetro crítico para asegurar la pureza y descartar adulteraciones</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="modal-k232" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-k232')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">03</span>
            <h2>Prueba Espectrofotométrica K<sub>232</sub></h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Objetivo:</strong> Detección de dienos conjugados derivados de la oxidación primaria.</div>
            <p>Un índice elevado en la prueba K<sub>232</sub> no siempre implica envejecimiento cronológico del producto; frecuentemente advierte que la aceituna llegó dañada, rota o defectuosa a la molienda.</p>

            <div class="image-placeholder">
                <img src="{{ asset('img/aceite/aceitunas.png') }}" alt="Aceitunas">
            </div>

            <p><strong>Factores de riesgo que elevan el índice K<sub>232</sub>:</strong></p>
            <ul style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                <li><strong>Amontonamiento de las aceitunas:</strong> Aplastamiento y almacenamiento prolongado en sacos o tolvas (atroje) que inicia procesos de degradación celular.</li>
                <li><strong>Estrés térmico:</strong> Superar los 27 °C durante la fase de extracción mecánica invalida el límite legal para la denominación de "extracción en frío".</li>
                <li><strong>Exposición ambiental:</strong> Deficiente conservación en bodegas o envases frente a la luz directa y el oxígeno (aire), acelerando la cascada oxidativa.</li>
            </ul>

            <div class="image-placeholder">
                <img src="{{ asset('img/aceite/aceituna_lepra.png') }}" alt="Aceituna lepra">
            </div>
        </div>
    </div>
</div>

<div id="modal-k270" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-k270')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">04</span>
            <h2>Prueba K<sub>270</sub> y Análisis Estadísticos</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Objetivo:</strong> Identificación de trienos conjugados y compuestos de enranciamiento avanzado.</div>
            
            <p><strong>Detección inequívoca de aceites rectificados:</strong></p>
            <p style="font-size: 14px; color: #475569; line-height: 1.5; margin-bottom: 15px;">
                Los aceites obtenidos meramente por vías mecánicas y tradicionales no contienen dobles o triples enlaces conjugados en estas longitudes de onda. Estos enlaces artificiales se forman de manera forzada durante los procesos químicos industriales de rectificación y refinado.
            </p>

            <table class="modal-table">
                <thead>
                    <tr>
                        <th>Métrica Matemática</th>
                        <th>Función y Utilidad Analítica</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Valores S-K</strong></td>
                        <td>Es la suma estadística ponderada de los índices absorciométricos K<sub>232</sub> + K<sub>270</sub>. Se utiliza como un macroindicador para calificar de manera global el estado de frescura y pureza comercial del producto.</td>
                    </tr>
                    <tr>
                        <td><strong>Delta K</strong></td>
                        <td>Métrica estadística de alta precisión espectral. Actúa como un filtro de verificación matemática cruzada para ratificar con certeza absoluta los hallazgos críticos de las pruebas K<sub>232</sub> y K<sub>270</sub>.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>