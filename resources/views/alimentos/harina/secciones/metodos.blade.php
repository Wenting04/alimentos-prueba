<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3 id="criteriosTitle">Criterios Analíticos de la Harina</h3>
        </div>

        <p class="analysis-intro">
            Estos parámetros permiten evaluar la <strong>calidad, pureza y aptitud tecnológica</strong> industrial de la harina, además de determinar su comportamiento en panificación y su vida útil comercial.
        </p>

        <div class="analysis-dashboard">

            <div class="dashboard-item">
                <i class="fas fa-droplet"></i>
                <div class="item-text">
                    <span class="item-title">Humedad</span>
                    <small>Control de vida útil y molienda (Normal: 14%-15%)</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-fire"></i>
                <div class="item-text">
                    <span class="item-title">Cenizas</span>
                    <small>Mide los minerales totales e indica el grado de refinado</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-dna"></i>
                <div class="item-text">
                    <span class="item-title">Gluten</span>
                    <small>Complejo proteico elástico que retiene el gas de fermentación</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-vial"></i>
                <div class="item-text">
                    <span class="item-title">Proteínas Totales</span>
                    <small>Cuantificación de nitrógeno total por método Kjeldahl</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-cubes"></i>
                <div class="item-text">
                    <span class="item-title">Almidón</span>
                    <small>Carbohidrato principal responsable de la gelatinización</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-filter"></i>
                <div class="item-text">
                    <span class="item-title">Granulometría</span>
                    <small>Distribución del tamaño de partículas por tamizado</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-bolt"></i>
                <div class="item-text">
                    <span class="item-title">Fuerza de masa</span>
                    <small>Determina si la harina es floja, media o de gran fuerza</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-wave-square"></i>
                <div class="item-text">
                    <span class="item-title">Técnicas NIR</span>
                    <small>Espectroscopía infrarroja para análisis rápido y no destructivo</small>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3>Ensayos de Laboratorio</h3>
        </div>

        <div class="physic-chem-grid">

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">01</span>
                    <h4>Humedad</h4>
                </div>
                <div class="lab-card-body">
                    <p>Determina la cantidad de agua libre. Es vital para prevenir el <strong>crecimiento de microorganismos</strong>, asegurar la estabilidad durante el almacenamiento y pautar su vida útil.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/harina/humedad.jpg') }}" alt="Humedad de la harina">
                        <span class="img-label">Secado en Estufa</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-01')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">02</span>
                    <h4>Cenizas</h4>
                </div>
                <div class="lab-card-body">
                    <p>Mide el residuo mineral inorgánico. Es el parámetro estándar internacional para definir con exactitud el <strong>grado de refinamiento</strong> de la harina y su pureza.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/harina/cenizas.jpg') }}" alt="Cenizas de la harina">
                        <span class="img-label">Horno Mufla (550°C)</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-02')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">03</span>
                    <h4>Gluten</h4>
                </div>
                <div class="lab-card-body">
                    <p>Evalúa el complejo elástico remanente tras lavar el almidón. Dictamina de forma directa la <strong>capacidad de retención de gas</strong> y la estructura alveolar del pan.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/harina/gluten.png') }}" alt="Ensayo de gluten">
                        <span class="img-label">Lavado de Masa</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-03')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">04</span>
                    <h4>Proteínas</h4>
                </div>
                <div class="lab-card-body">
                    <p>Cuantificación del porcentaje proteico total a partir del nitrógeno orgánico. Esencial para catalogar las harinas según su <strong>destino e idoneidad panadera</strong>.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/harina/proteinas.jpg') }}" alt="Método Kjeldahl">
                        <span class="img-label">Digestor Kjeldahl</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-04')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">05</span>
                    <h4>Almidón</h4>
                </div>
                <div class="lab-card-body">
                    <p>Estudio analítico del carbohidrato principal de la harina. Regula los fenómenos reológicos de <strong>gelatinización por calor</strong>, textura e índice glucémico.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/harina/almidon.jpg') }}" alt="Análisis del almidón">
                        <span class="img-label">Espectroscopía NIR</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-05')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>

            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">06</span>
                    <h4>Granulometría</h4>
                </div>
                <div class="lab-card-body">
                    <p>Analiza la distribución física del tamaño de las partículas de molienda. Modifica drásticamente la <strong>tasa de absorción de agua</strong> y suavidad de la masa.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/harina/granulometria_img.jpg') }}" alt="Tamizado de harina">
                        <span class="img-label">Tamizado en Cascada</span>
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
            <h2>Análisis de Humedad</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Metodología:</strong> Balanza analítica, estufa de desecación termostática y desecador.</div>
            <p><strong>Procedimiento operatorio:</strong></p>
            <ol style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                <li>Se pesa con precisión una muestra inicial de harina húmeda.</li>
                <li>Se somete a desecación controlada en estufa hasta alcanzar peso constante.</li>
                <li>Se enfría en desecador y se efectúa la pesada final para calcular la masa evaporada.</li>
            </ol>
            <table class="modal-table">
                <tr>
                    <th>Rango porcentual</th>
                    <th>Interpretación y Viabilidad</th>
                </tr>
                <tr>
                    <td>14% - 15%</td>
                    <td>Valores normales. Óptima conservación y vida útil regulada.</td>
                </tr>
                <tr>
                    <td>&gt; 15%</td>
                    <td>Riesgo crítico. Favorece la proliferación de mohos e inestabilidad en el almacén.</td>
                </tr>
            </table>

            <div class="image-placeholder">
                <img src="{{ asset('img/harina/hidratacion.jpg') }}" alt="Diferencias de tamaños por hidratación">
            </div>
        </div>
    </div>
</div>

<div id="modal-02" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-02')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">02</span>
            <h2>Determinación de Cenizas</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Metodología:</strong> Crisol de porcelana, horno mufla de alta temperatura y balanza de precisión.</div>
            <p><strong>Procedimiento operatorio:</strong></p>
            <ol style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                <li>Pesaje exacto de la muestra de harina en el crisol.</li>
                <li>Incinoración completa en horno mufla a temperaturas de entre 500°C y 550°C.</li>
                <li>Enfriamiento controlado de las cenizas blancas/grisáceas y pesaje del residuo inorgánico.</li>
            </ol>
            <table class="modal-table">
                <thead>
                    <tr>
                        <th>Tipo de Harina</th>
                        <th>Porcentaje de Cenizas</th>
                        <th>Grado de Refinado / Pureza</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Harinas Refinadas</td>
                        <td>0.4% - 0.7%</td>
                        <td>Alto refinamiento (baja presencia de salvado/corteza).</td>
                    </tr>
                    <tr>
                        <td>Harinas Integrales</td>
                        <td>&gt; 1.5%</td>
                        <td>Molienda de grano entero (conserva germen y salvado mineralizado).</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="modal-03" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-03')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">03</span>
            <h2>Evaluación del Gluten</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Metodología:</strong> Solución salina, amasado manual/mecánico, lavado de almidón y secado opcional.</div>
            <p><strong>Criterios tecnológicos de la red:</strong></p>
            <ul style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                <li><strong>Masa Débil (Bajo Gluten):</strong> Genera redes laxas. Idónea para la industria de galletas y repostería fina.</li>
                <li><strong>Masa Fuerte (Alto Gluten):</strong> Permite retener eficientemente el $CO_2$ liberado, logrando panes de alta esponjosidad y volumen.</li>
            </ul>
        </div>
    </div>
</div>

<div id="modal-04" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-04')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">04</span>
            <h2>Proteínas por Método Kjeldahl</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Metodología:</strong> Ácido sulfúrico concentrado, catalizador, unidad de destilación y titulación ácida.</div>
            <p><strong>Fases del ensayo:</strong> Pesaje → Digestión ácida → Destilación del amoníaco → Valoración química del nitrógeno total → Multiplicación por el factor de conversión del cereal.</p>
            <table class="modal-table">
                <thead>
                    <tr>
                        <th>Clasificación</th>
                        <th>Porcentaje Proteico</th>
                        <th>Aplicación Industrial</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Harinas Flojas</td>
                        <td>8% - 10%</td>
                        <td>Galletas, masas quebradas, repostería simple.</td>
                    </tr>
                    <tr>
                        <td>Harinas Medias</td>
                        <td>10% - 12%</td>
                        <td>Panificación estándar, baguettes, productos comunes.</td>
                    </tr>
                    <tr>
                        <td>Harinas Fuertes</td>
                        <td>12% - 15%</td>
                        <td>Panes de larga fermentación, bollería enriquecida (brioche), masas madre.</td>
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
            <h2>Estudio del Almidón</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Metodología:</strong> Espectroscopía de reflectancia en el infrarrojo cercano (NIR) y microscopía óptica.</div>
            <p>Analiza minuciosamente los gránulos de tipo A y B. Su comportamiento determina la viscosidad, la absorción y la velocidad de digestibilidad enzimática (índice glucémico del producto terminado).</p>

            <div class="image-placeholder">
                <img src="{{ asset('img/harina/gelatinizacion_almidon.jpg') }}" alt="Gelatinización del almidón">
            </div>
        </div>
    </div>
</div>

<div id="modal-06" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-06')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">06</span>
            <h2>Distribución Granulométrica</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Metodología:</strong> Tamizadora electromecánica, juego de tamices normalizados de luces decrecientes.</div>
            <p><strong>Fases del análisis:</strong></p>
            <p style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                1. Disposición de la muestra en la torre superior.<br>
                2. Activación del ciclo de tamizado vibratorio.<br>
                3. Separación y pesaje del rechazo retenido en cada malla para trazar el perfil de partículas (Finas, Medias o Gruesas/Sémolas).
            </p>

            <div class="image-placeholder">
                <img src="{{ asset('img/harina/granulometria.jpg') }}" alt="Granulometría elementos">
            </div>
        </div>
    </div>
</div>