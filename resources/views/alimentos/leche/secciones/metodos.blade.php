<div class="analysis-container">
    <div class="analysis-card">
        <!-- Criterios analíticos-->
        <div class="subtitle-wrapper">
            <h3 id="criteriosTitle">Criterios Analíticos</h3>
        </div>

        <p class="analysis-intro">
            Estos parámetros permiten evaluar la
            <strong>calidad y seguridad</strong>
            alimentaria, así como detectar posibles fraudes como la adición de agua.
        </p>

        <div class="analysis-dashboard">

            <div class="dashboard-item">
                <i class="fas fa-vial"></i>
                <div class="item-text">
                    <span class="item-title">pH</span>
                    <small>Indica la frescura e higiene (Normal: 6.6-6.8)</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-flask"></i>
                <div class="item-text">
                    <span class="item-title">Acidez</span>
                    <small>Mide la fermentación láctica en grados Dornic</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-droplet"></i>
                <div class="item-text">
                    <span class="item-title">Grasa</span>
                    <small>Valor nutricional y comercial del producto</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-weight-scale"></i>
                <div class="item-text">
                    <span class="item-title">Densidad</span>
                    <small>Crucial para detectar la adición de agua</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-temperature-half"></i>
                <div class="item-text">
                    <span class="item-title">Punto ebullición</span>
                    <small>Propiedad física constante de la leche pura</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-eye"></i>
                <div class="item-text">
                    <span class="item-title">Índice de refracción</span>
                    <small>Analiza los sólidos disueltos en el suero</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-snowflake"></i>
                <div class="item-text">
                    <span class="item-title">Punto crioscópico</span>
                    <small>El método más preciso contra el fraude</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-wine-glass"></i>
                <div class="item-text">
                    <span class="item-title">Prueba de alcohol</span>
                    <small>Determina la estabilidad térmica para UHT</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-microscope"></i>
                <div class="item-text">
                    <span class="item-title">Azul de metileno</span>
                    <small>Calidad microbiológica y carga bacteriana</small>
                </div>
            </div>

            <div class="dashboard-item">
                <i class="fas fa-vial-circle-check"></i>
                <div class="item-text">
                    <span class="item-title">Fosfatasa alcalina</span>
                    <small>Verifica la correcta pasteurización</small>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Criterios físico químicos-->
<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3>Criterios físico-químicos</h3>
        </div>

        <div class="physic-chem-grid">

            <!-- 1. Determinación del pH-->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">01</span>
                    <h4>pH</h4>
                </div>
                <div class="lab-card-body">
                    <p>Indica la <strong>frescura e higiene</strong> de la leche. Su control se realiza desde la
                    recolección hasta
                    la distribución para asegurar que no haya sido alterada.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/leche/pH.png') }}" alt="pH">
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-01')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>
            <!-- 2. Acidez-->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">02</span>
                    <h4>Acidez</h4>
                </div>
                <div class="lab-card-body">
                    <p>Mide la <strong>lactosa fermentada</strong>, indicando actividad bacteriana y
                    calidad higiénica. Se expresa en grados Dornic (°D) mediante un
                    proceso de titulación química.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/leche/acidez.jpg') }}" alt="Acidez">
                        <span class="img-label">Titulación NaOH</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-02')">
                    Ver detalles<i class="fas fa-arrow-right"></i>
                </div>
            </div>
            <!-- 3. Grasa-->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">03</span>
                    <h4>Grasa</h4>
                </div>
                <div class="lab-card-body">
                    <p>Determina el <strong>valor comercial</strong> y nutricional. Se separa la grasa mediante ácido
                    sulfúrico y centrifugación.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/leche/03_grasa.jpg') }}" alt="Grasa">
                        <span class="img-label">Butirómetro Gerber</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-03')">
                    Ver detalles<i class="fas fa-arrow-right"></i>
                </div>
            </div>
            <!-- 4. Densidad-->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">04</span>
                    <h4>Densidad</h4>
                </div>
                <div class="lab-card-body">
                    <p>Permite detectar el <strong>fraude por aguado</strong>. La leche pura tiene una gravedad
                    específica mayor que el agua pura.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/leche/04_densidad.png') }}" alt="Densidad">
                        <span class="img-label">Lactodensímetro</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-04')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>
            <!-- 5. Punto de ebullición-->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">05</span>
                    <h4>Ebullición</h4>
                </div>
                <div class="lab-card-body">
                    <p>Propiedad física que varía según la <strong>concentración de solutos</strong>. Indica la
                    estabilidad térmica del producto.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/leche/05_ebullicion.png') }}" alt="Ebullición">
                        <span class="img-label">Punto térmico</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-05')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>
            <!-- 6. Indice de refracción-->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">06</span>
                    <h4>Refracción</h4>
                </div>
                <div class="lab-card-body">
                    <p>Analiza los <strong>sólidos disueltos</strong> en el suero lácteo para verificar la pureza y
                    evitar adulteraciones.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/leche/06_refraccion.png') }}" alt="Refracción">
                        <span class="img-label">Refractómetro</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-06')">
                    Ver detalles <i class="fas fa-arrow-right"></i>
                </div>
            </div>
            <!-- 7. Punto criscópico-->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">07</span>
                    <h4>Crioscopía</h4>
                </div>
                <div class="lab-card-body">
                    <p>El método más preciso para detectar <strong>agua añadida</strong> midiendo el punto de
                    congelación exacto de la leche.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/leche/07_crioscopio.png') }}" alt="Crioscopía">
                        <span class="img-label">Punto de congelación</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-07')">
                    Ver detalles<i class="fas fa-arrow-right"></i>
                </div>
            </div>
            <!-- 8. Prueba de alcohol-->
            <div class="lab-card">
                <div class="lab-card-header">
                    <span class="lab-number">08</span>
                    <h4>Alcohol</h4>
                </div>
                <div class="lab-card-body">
                    <p>Mide la <strong>estabilidad proteica</strong> ante el calor. Determina si la leche es apta para
                    procesos UHT o pasteurización.</p>
                    <div class="lab-img-wrapper">
                        <img src="{{ asset('img/leche/08_alcohol.jpg') }}" alt="Alcohol">
                        <span class="img-label">Prueba de coagulación</span>
                    </div>
                </div>
                <div class="lab-card-footer detail-btn" onclick="openModal('modal-08')">
                    Ver detalles<i class="fas fa-arrow-right"></i>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Detalles de las cartas-->
<div id="modal-01" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-01')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">01</span>
            <h2>Determinación del pH</h2>
        </div>
        <div class="modal-body">
            <div class="info-tag"><strong>Instrumentos:</strong> pH-metro, electrodo y soluciones tampón.</div>
            <p>El pH mide la concentración de iones hidrógeno mediante un electrodo
            de vidrio previamente calibrado.</p>
            <table class="modal-table">
                <tr>
                    <th>Valor</th>
                    <th>Interpretación</th>
                </tr>
                <tr>
                    <td>6.6 - 6.8</td>
                    <td>Leche normal</td>
                </tr>
                <tr>
                    <td>&lt; 6.6</td>
                    <td>Acidificación (presencia de bacterias)</td>
                </tr>
                <tr>
                    <td>&gt; 6.8</td>
                    <td>Posible mastitis</td>
                </tr>
            </table>
        </div>
        <div class="modal-body">
            @include('alimentos.leche.componentes.medidor_ph')
        </div>
    </div>
</div>

<div id="modal-02" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-02')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">02</span>
            <h2>Acidez en Grados Dornic (°D)</h2>
        </div>
        <div class="modal-body">

            <div class="info-tag">
                <strong>Instrumentos:</strong> Bureta, matraz, NaOH y fenolftaleína.
            </div>

            <p><strong>Factores que aumentan la acidez:</strong></p>
            <p style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                <li>Bacterias</li>
                <li>Temperaturas elevadas</li>
                <li>Mala conservación</li>
                <li>Enfermedades del animal (ej: mastitis)</li>
            </p><br>

            <p><strong>Factores que aumentan la acidez:</strong></p>
            <p style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                <li>Añadir fenolftaleína a la muestra.</li>
                <li>Temperaturas elevadas</li>
                <li>Valorar con NaOH.</li>
                <li>La aparición de un color rosado indica el punto final.</li>
            </p>

            <table class="modal-table">
            <thead>
                <tr>
                    <th>ACIDEZ (°D)</th>
                    <th>INTERPRETACIÓN</th>
                    <th>APTITUD</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>16 - 18 °D</td>
                    <td>Leche fresca, recién ordeñada </td>
                    <td>Apta para consumo y transformación</td>
                </tr>
                <tr>
                    <td>18 - 20 °D</td>
                    <td>Inicio de fermentación, acidez moderada </td>
                    <td>Aceptable sólo si se pasteuriza</td>
                </tr>
                <tr>
                    <td>&ge; 20 °D</td>
                    <td>Leche claramente ácida </td>
                    <td>No apta para venta líquida; sólo para productos fermentados </td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="modal-body">
            @include('alimentos.leche.componentes.medidor_acidez')
        </div>
    </div>
</div>

<div id="modal-03" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-03')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">03</span>
            <h2>Contenido en Grasa (Método Gerber)</h2>
        </div>
        <div class="modal-body">
            <p>Determina el porcentaje de grasa mediante la separación química de las proteínas y posterior
            centrifugación.</p><br>

            <div class="info-tag">
                <strong>Equipos:</strong> butirómetro, centrífuga Gerber
            </div>

            <p><strong>Importancia:</strong></p>
            <p style="font-size: 14px;  line-height: 1.6; padding-left: 20px;">
                <li>Control de calidad</li>
                <li>Cumplimiento legal</li>
                <li>Detección de fraudes</li>
            </p>

            <table class="modal-table">
            <thead>
                <tr>
                    <th>TIPO DE LECHE</th>
                    <th>CONTENIDO GRASO (%)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Leche Entera</td>
                    <td>&ge; 3.2% - 3.5%</td>
                </tr>
                <tr>
                    <td>Leche Semidesnatada</td>
                    <td>1.5% - 1.8%</td>
                </tr>
                <tr>
                    <td>Leche Desnatada</td>
                    <td>&lt; 0.5%</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>

<div id="modal-04" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-04')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">04</span>
            <h2>Determinación de la Densidad</h2>
        </div>
        <div class="modal-body">
            <p>Permite conocer la relación entre la masa y el volumen de la leche, siendo un indicador clave para
            detectar adulteraciones.</p><br>

            <div class="info-tag">
                <strong>Instrumentos:</strong> lactodensímetro
            </div>

            <table class="modal-table">
                <thead>
                    <tr>
                        <th>PARÁMETRO</th>
                        <th>VALOR REFERENCIA</th>
                        <th>INTERPRETACIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Leche Entera</td>
                        <td>1.030 - 1.033 g/ml</td>
                        <td>Densidad Normal</td>
                    </tr>
                    <tr>
                        <td>Adición de Agua</td>
                        <td>&lt; 1.028 g/ml</td>
                        <td>Fraude por aguado</td>
                    </tr>
                    <tr>
                        <td>Leche Desnatada</td>
                        <td>&gt; 1.033 g/ml</td>
                        <td>Extracción de grasa</td>
                    </tr>
                </tbody>
            </table>

            <div class="info-tag">
                <strong>Uso:</strong>
                <li>Detectar adulteraciones</li>
                <li>Verificar calidad</li>
            </div>
        </div>
    </div>
</div>

<div id="modal-05" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-05')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">05</span>
            <h2>Punto de ebullición</h2>
        </div>
        <div class="modal-body">
            <p>Temperatura a la que la leche hierve (ligeramente superior al agua).</p><br>

            <div class="info-tag">
                <strong>Instrumentos:</strong> termómetro, placa calefactora, vaso de precipitados.
            </div>

            <table class="modal-table">
                <thead>
                    <tr>
                        <th>GRADOS (ºc)</th>
                        <th>INTERPRETACIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>100,15 - 100,5 ºC</td>
                        <td>Leche normal (composición adecuada)</td>
                    </tr>
                    <tr>
                        <td>Cercano a 100ºC </td>
                        <td>Posible adición de agua (dilución)</td>
                    </tr>
                    <tr>
                        <td>Superior a 100,5 ºC</td>
                        <td>Mayor concentración de solutos</td>
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
            <h2>Índice de refracción</h2>
        </div>
        <div class="modal-body">
            <p>Es una prueba que mide cómo se desvía la luz al pasar a través de la noche.</p><br>

            <div class="info-tag">
                <strong>Instrumentos:</strong> refractómetro
            </div>

            <table class="modal-table">
                <thead>
                    <tr>
                        <th>ÍNDICE DE REFRACCIÓN</th>
                        <th>INTERPRETACIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1,3440 - 1,3480</td>
                        <td>Leche normal</td>
                    </tr>
                    <tr>
                        <td>&lt; 1,3440 </td>
                        <td>Posible adición de agua</td>
                    </tr>
                    <tr>
                        <td>&gt; 1,3480</td>
                        <td>Mayor concentración de solutos</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div id="modal-07" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-07')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">07</span>
            <h2>Punto crioscópico</h2>
        </div>
        <div class="modal-body">
            <p>Temperatura de congelación de la leche (depende de los solutos), expresada en grados
            Horvet (°H) porque depende de la concentración de solutos de la leche.</p><br>

            <div class="info-tag">
                <strong>Instrumentos:</strong> crioscopio
            </div>

            <table class="modal-table">
                <thead>
                    <tr>
                        <th>VALOR</th>
                        <th>INTERPRETACIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Entre -0,510 y -0,530 °H </td>
                        <td>Leche normal, sin alteraciones</td>
                    </tr>
                    <tr>
                        <td>Cercanos a 0 °H </td>
                        <td>Posible adición de agua</td>
                    </tr>
                    <tr>
                        <td>Más bajos (más negativos)</td>
                        <td>Mayor concentración de solutos en la leche</td>
                    </tr>
                </tbody>
            </table>
            <div class="info-tag">
                <li>Cuanta más agua (menos solutos) tenga una solución como la leche, más se eleva
                su punto de congelación.</li>
            </div>

        </div>
    </div>
</div>


<div id="modal-08" class="lab-modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal('modal-08')">&times;</span>
        <div class="modal-header">
            <span class="lab-number">08</span>
            <h2>Prueba de alcohol</h2>
        </div>
        <div class="modal-body">
            <p>Evalúa la estabilidad de las proteínas (caseínas) al mezclarlas con alcohol.</p><br>

            <table class="modal-table">
                <thead>
                    <tr>
                        <th>OBSERVACIÓN</th>
                        <th>RESULTADO</th>
                        <th>INTERPRETACIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sin grumos</td>
                        <td>Negativo (-)</td>
                        <td>Leche estable, apta para tratamiento térmico.</td>
                    </tr>
                    <tr>
                        <td>Presencia de grumos o partículas</td>
                        <td>Positivo (+)</td>
                        <td>Proteína inestable. Leche ácida o con desequilibrio salino.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Criterios microbiológicos y enzimáticos -->
<div class="analysis-container">
    <div class="analysis-card">
        <div class="subtitle-wrapper">
            <h3>Criterios microbiológicos y enzimáticos</h3>
        </div>

        <div class="accordion-group">
            <!-- 9 -->
            <details class="accordion">

                <summary>
                    9. Reducción del Azul de Metileno
                </summary>

                <div class="accordion-content">

                    <div class="info-tag">
                        <p>Evalúa la actividad microbiana mediante el tiempo de
                            decoloración del colorante azul.</p>
                    </div>


                    <div class="info-tag">
                        <div class="content-block">
                            <h4>Funcionamiento</h4>

                            <ul>
                                <li>El azul de metileno es un indicador.</li>
                                <li>Color azul → hay oxígeno (O₂).</li>
                                <li>Los microorganismos consumen O₂ y producen enzimas reductasas.</li>
                                <li>Resultado → el color pasa de azul a incoloro.</li>
                            </ul>
                        </div>

                        <div class="content-block">
                            <h4>Necesario para</h4>
                            <ul>
                                <li>Detectar contaminación microbiana.</li>
                                <li>Controlar la eficacia del tratamiento térmico.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="info-tag">
                        <div class="content-block">
                            <h4>Resultados del análisis</h4>

                            <div class="image-placeholder">
                                <img src="{{ asset('img/leche/resultado_analisis.png') }}" alt="Resultado analisis">
                            </div>

                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Calidad</th>
                                        <th>Tiempo</th>
                                        <th>Bacterias/ml</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>Buena</td>
                                        <td>5 horas</td>
                                        <td>100.000 - 200.000</td>
                                    </tr>

                                    <tr>
                                        <td>Regular a buena</td>
                                        <td>2 - 4 horas</td>
                                        <td>200.000 - 2.000.000</td>
                                    </tr>

                                    <tr>
                                        <td>Mala</td>
                                        <td>≤ 2 horas</td>
                                        <td>2 - 10 millones</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="info-tag">
                        <div class="content-block">
                            <h4>Equipo</h4>

                            <!-- IMAGEN -->
                            <div class="image-placeholder">
                                <img src="{{ asset('img/leche/9_equipo.png') }}" alt="Equipo TRAM">
                            </div>

                        </div>
                    </div>
                </div>

            </details>

            <!-- 10 -->
            <details class="accordion">
                <summary>10. Fosfatasa Alcalina</summary>

                <div class="accordion-content">
                    <div class="info-tag">
                        <p class="intro-text">
                            Es una enzima presente en leche cruda que se inactiva
                            mediante el tratamiento térmico.
                        </p>
                    </div>

                    <div class="info-tag">
                        <div class="content-block">
                            <h4>Características</h4>

                            <ul>
                                <li>Se inactiva con el tratamiento térmico.</li>
                                <li>
                                    Requiere condiciones ligeramente más intensas
                                    que las necesarias para destruir bacterias
                                    patógenas.
                                </li>
                            </ul>
                        </div>

                        <div class="content-block">
                            <h4>Interpretación</h4>

                            <ul>
                                <li>
                                    Ausencia de la enzima → pasteurización correcta.
                                </li>
                                <li>
                                    Presencia de la enzima → tratamiento térmico insuficiente.
                                </li>
                            </ul>
                        </div>

                        <div class="content-block">
                            <h4>Importancia</h4>

                            <ul>
                                <li>
                                    Se inactiva en tratamientos térmicos adecuados.
                                </li>
                                <li>
                                    Su ausencia garantiza que la leche es apta
                                    para el consumo.
                                </li>
                            </ul>
                        </div>

                        <div class="content-block">
                            <h4>Método</h4>

                            <ul>
                                <li>
                                    Reacción enzimática sobre un sustrato sintético.
                                </li>
                                <li>
                                    Produce un cambio de color en la muestra.
                                </li>
                                <li>
                                    Uso de kit colorimétrico cualitativo.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="info-tag">
                        <div class="content-block">
                            <h4>Equipos utilizados</h4>

                            <!-- IMAGEN -->
                            <div class="image-placeholder">
                                <img src="{{ asset('img/leche/10_equipo.png') }}" alt="Equipo fosfatasa">
                            </div>

                        </div>

                        <div class="content-block">
                            <h4>Reactivo utilizado</h4>

                            <!-- IMAGEN -->
                            <div class="image-placeholder">
                                <img src="{{ asset('img/leche/10_reactivo.png') }}" alt="Reactivo utilizado">
                            </div>

                        </div>
                    </div>


                    <div class="info-tag">
                        <div class="content-block">
                            <h4>Procedimiento</h4>

                            <ul>
                                <li>
                                    <strong>Preparación:</strong>
                                    Hervir 5 mL de leche cruda y añadir 10 mL de agua.
                                </li>
                                <li>
                                    <strong>Preparación del reactivo:</strong>
                                    Utilizar tabletas Lactognost I y II, moler
                                    previamente en un mortero y remover con una
                                    varilla de vidrio.
                                </li>
                                <li>
                                    <strong>Análisis:</strong>
                                    Pipetear 1 mL de leche en cada tubo e incubar
                                    a 37 °C durante 1 hora.
                                </li>
                                <li>
                                    <strong>Reacción:</strong>
                                    Añadir una cucharadita de reactivo Lactognost III
                                    y homogeneizar.
                                </li>
                                <li>
                                    <strong>Lectura de resultados:</strong>
                                    Esperar 10 minutos. Color azul → presencia de
                                    actividad de fosfatasa alcalina.
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </details>
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
            <!-- SIMULADOR -->
            <details class="accordion">

                <summary>
                    Simulador
                </summary>

                <div class="accordion-content">
                    <!-- Simulador -->
                    @include('alimentos.leche.componentes.simulador')
                </div>

            </details>
        </div>
    </div>
</div>