<div class="nutrition-container">
    <details class="nutrition-card">
        <summary>
            <div class="summary-left">
                <span class="icon">🫒</span>
                <div>
                    <h3>Aceite de Oliva Virgen Extra (AOVE)</h3>
                    <p>Composición nutricional principal</p>
                </div>
            </div>

            <span class="arrow">⌄</span>
        </summary>

        <div class="card-content">
            <div class="nutrition-grid">
                <div class="nutrition-item">
                    <span class="tag grasa">Triglicéridos</span>
                    <strong>99%</strong>
                    <p>Grasas saturadas, monoinsaturadas y poliinsaturadas.</p>
                </div>

                <div class="nutrition-item">
                    <span class="tag minerales">Valor Energético</span>
                    <strong>9 kcal/g</strong>
                    <p>Elevado aporte calórico por gramo de grasa.</p>
                </div>
            </div>

            <div class="extra-info">
                <div class="info-box">
                    <h4>Esteroles principales</h4>
                    <ul>
                        <li>β-sitosterol (betasitosterol)</li>
                        <li>Campesterol (campestirol)</li>
                        <li>Estigmasterol</li>
                    </ul>
                </div>

                <div class="info-box">
                    <h4>Componentes destacados</h4>
                    <ul>
                        <li>Compuestos antioxidantes → ayudan a mejorar la estabilidad del aceite.</li>
                        <li>Fosfolípidos → aportan valor, pero pueden reducirse o eliminarse durante el refinado.</li>
                    </ul>
                </div>
            </div>
        </div>
    </details>

    <details class="nutrition-card">
        <summary>
            <div class="summary-left">
                <span class="icon">⚗️</span>
                <div>
                    <h3>Impacto del Refinado</h3>
                    <p>Efecto en Fosfolípidos y Esteroles</p>
                </div>
            </div>

            <span class="arrow">⌄</span>
        </summary>

        <div class="card-content">
            <div class="comparison-grid">

                <div class="info-box">
                    <h4>Fosfolípidos en la Refinación</h4>
                    <p>
                        Se eliminan o reducen drásticamente durante el proceso de refinado industrial.
                    </p>
                </div>

                <div class="info-box">
                    <h4>Autooxidación y Color</h4>
                    <p>
                        Su pérdida provoca un aumento de la autooxidación en grasas refinadas y favorece coloraciones oscuras durante la desodoración por altas temperaturas.
                    </p>
                </div>

            </div>
        </div>
    </details>

    <details class="nutrition-card">
        <summary>
            <div class="summary-left">
                <span class="icon">🧬</span>
                <div>
                    <h3>Composición química</h3>
                    <p>Detalles sobre ácidos grasos, polifenoles y otros componentes esenciales</p>
                </div>
            </div>

            <span class="arrow">⌄</span>
        </summary>

        <div class="card-content">
            <div id="contenCompQui">
                <div class="mapa">
                    <!-- SVG con viewBox para que escale bien -->
                    <svg viewBox="0 0 100 100" preserveAspectRatio="xMidYMid meet">
                    <defs>
                        <marker id="arrow" markerWidth="5" markerHeight="5" refX="4" refY="2.5" orient="auto">
                        <polygon points="0,0 0,5 5,2.5" fill="#cba000"/>
                        </marker>
                    </defs>
                    <!-- De Aceite al resto -->
                    <line x1="50" y1="50" x2="50" y2="25" stroke="#cba000" stroke-width="1" marker-end="url(#arrow)"/>
                    <line x1="50" y1="50" x2="50" y2="75" stroke="#cba000" stroke-width="1" marker-end="url(#arrow)"/>
                    <line x1="50" y1="50" x2="90" y2="50" stroke="#cba000" stroke-width="1" marker-end="url(#arrow)"/>
                    <line x1="50" y1="50" x2="10" y2="50" stroke="#cba000" stroke-width="1" marker-end="url(#arrow)"/>
                    </svg>

                    <!-- Nodos -->
                    <div class="nodo aceite"><img src="{{ asset('img/aceite/mind_map_aceite.png') }}" alt=""></div>
                    <div class="nodo acidosGrasos" id="acidosGrasos">Ácidos grasos</div>
                    <div class="nodo polifenoles" id="polifenoles">Polifenoles</div>
                    <div class="nodo tocoferoles" id="tocoferoles">Tocoferoles</div>
                    <div class="nodo compVolAro" id="compVolAro">Compuestos volátiles y aromáticos</div>
                </div>
                <dialog id="dialogMindMap">
                    <img src="{{ asset('img/aceite/cruzAceite.png') }}" alt="Icono cruz" id="cerrarBoton">
                    <div class="contenidoDialogo">
                        <h2 id="infoTitulo">Título</h2>
                        <div id="infoContenido">
                            <p><span class="inofNegrita">Información:</span> <span id="infoDesc"></span></p>
                        </div>
                    </div>
                </dialog>
            </div>
        </div>
    </details>
</div>