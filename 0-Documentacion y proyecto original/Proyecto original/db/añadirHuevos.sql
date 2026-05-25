INSERT INTO alimento (nombre,descripcion,imagen_url)
VALUES ('Huevo','<p>El huevo es el cuerpo germinativo y reproductivo producido por las hembras de las aves (principalmente gallina) u otros animales, cubierto por una cáscara protectora.</p>','../img/huevo_img.png');
-- Alimento: Huevo = 1
/**Tipo_alimento : VALOR NUTRICIONAL = 1
INGESTA RECOMENDADAS Y OBJETIVOS NUTRICIONALES = 2
RACIONES Y MEDIDAS CASERAS = 3
PATOLOGÍAS Y FISIOLOGÍAS = 4
MÉTODOS DE ANÁLISIS = 5
CURIOSIDADES = 6**/
INSERT INTO contenido (texto,id_tipo,id_alimento)
-- Valor nutricional
VALUES ('<div id="infografia">
    <object id="svg1" data="componentes/huevo.svg" type="image/svg+xml"></object>
    <div id="infoCascara" class="infoParte"><i class="fi fi-rr-egg"></i>
        <h2>Cáscara (10% del peso total)</h2>
        <ul>
            <li><strong>COMPOSICIÓN:</strong> 94% Carbonato cálcico.</li>
            <li><strong>MINERALES:</strong> Zinc, hierro y magnesio.</li>
            <li><strong>ESTRUCTURA:</strong> 7.000 - 15.000 poros (intercambio gaseoso).</li>
            <li><strong>PROTECCIÓN:</strong> Cutícula externa (barrera microbiana) y membranas testáceas internas.</li>
            <li><strong>ESTADO:</strong> Debe estar limpia e intacta para su consumo.</li>
        </ul>
    </div>
    <div id="infoClara" class="infoParte">
        <h2>Clara (60% del peso total)</h2>
        <ul>
            <li><strong>AGUA:</strong> ~88%</li>
            <li><strong>PROTEÍNAS:</strong> 10% 
                <small>(Ovoalbúmina, conoalbúmina, ovomucoide, globulinas, ovomucina, lisozima y avidina)</small>
            </li>
            <li><strong>HIDRATOS DE CARBONO:</strong> 1%</li>
            <li><strong>AMINOÁCIDOS ESENCIALES:</strong> Contiene leucina, lisina y valina.</li>
        </ul>
    </div>
    <div id="infoYema" class="infoParte">
        <h2>Yema (30% del peso total)</h2>
        <ul>
            <li><strong>AGUA:</strong> ~50%</li>
            <li><strong>PROTEÍNAS:</strong> 31,1%</li>
            <li><strong>LÍPIDOS:</strong> 65,8% 
                <ul>
                    <li>Predominan <strong><abbr title="Ácidos Grasos Monoiinsaturados">AGM</abbr></strong> y <strong><abbr title="Ácidos Grasos Poliinsaturados">AGP</abbr></strong> de alta calidad.</li>
                    <li>Presencia de colesterol.</li>
                </ul>
            </li>
            <li><strong>PERFIL DE ÁCIDOS GRASOS:</strong> 
                <ul>
                    <li><strong>Ácido oleico (Omega-9):</strong> El más abundante (40%).</li>
                    <li>Palmítico, esteárico, linoleico (Omega-6) y alfa-linolénico (Omega-3).</li>
                </ul>
            </li>
            <li><strong>MINERALES:</strong> Muy rico en <strong>Fósforo</strong> (500-600 mg/100g) en forma de lecitina y fosvitina.</li>
        </ul>
    </div>
</div>',1,1),
-- Ingesta recomendada y objetivos nutricionales
('<div id="ingestaRecomendada">
    <h2>INGESTA RECOMENDADAS Y OBJETIVOS NUTRICIONALES</h2>
    <div class="contenido">
        <div id="recomendacionesDieteticas">
            <h3>RECOMENDACIONES DIETÉTICAS</h3>
            <ol>
                <li>Mantener una dieta equilibrada para reducir el estrés oxidativo</li>
                <li>Aporte de antioxidantes</li>
                <li>Favorecer la hidratación</li>
            </ol>
        </div>
        <div id="densidadNutricional">
            <h3>DENSIDAD NUTRICIONAL</h3>
            <ol>
                <li>Alto contenido en calcio (carbonato cálcico, conchas molidas)</li>
                <li>Vitamina D3 para mejorar absorción del calcio</li>
                <li>Aporte de fósforo en equilibrio con el calcio</li>
            </ol>
        </div>
        <div id="acidosGrasos">
            <h3>ÁCIDOS GRASOS</h3>
            <ol>
                <li>Incluir fuentes de omega-3 (semillas de lino, aceites vegetales)</li>
                <li>Controlar grasas saturadas vs insaturadas</li>
                <li>Uso de ingredientes funcionales en la dieta</li>
            </ol>
        </div>
    </div>
</div>',2,1),
-- Raciones y medidas caseras
('<div id="racioMedi">
    <h2>RACIONES Y MEDIDAS CASERAS</h2>
    <div class="contenido">
        <div id="ovoproductos">
            <h3>OVOPRODUCTOS</h3>
            <ol>
                <li>Son huevos sin cáscara sometido a pasteurización, congelación o deshidratación.</li>
                <li><h4>Principales tipos:</h4></li>
                <ol class="enumerar">
                    <li>Huevo líquido pasteurizado</li>
                    <li>Huevo en polvo</li>
                    <li>Huevo congelado</li>
                    <li>Mezclas preparadas</li>
                </ol>
            </ol>
            <ol class="galeria">
                <li><img src="../img/huevo_en_polvo.png" alt="Huevo en polvo"></li>
                <li><img src="../img/huevo_líquido_pasteurizado.png" alt="Huevo líquido"></li>
            </ol>
        </div>
        <div id="aplicaciones">
            <h3>APLICACIONES</h3>
            <ol>
                <li>
                    <h4>Cocina/Repostería</h4>
                    <ol class="enumerar">
                        <li>Cocido, frito, tortilla</li>
                        <li>Bizcochos, flanes, natillas</li>
                        <li>Salsas (mayonesa)</li>
                        <li>Rebozados</li>
                    </ol>
                </li>
                <li>
                    <h4>Industria</h4>
                    <ol class="enumerar">
                        <li>Bollería y pastelería industrial</li>
                        <li>Pasta industrial</li>
                        <li>Salsas industriales</li>
                        <li>Productos cárnicos</li>
                    </ol>
                </li>
                <li>
                    <h4>Restauración colectiva</h4>
                    <ol class="enumerar">
                        <li>Nutritivos</li>
                        <li>Fáciles de preparar</li>
                        <li>Económicos para alimentar a muchas personas</li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>
</div>',3,1),
-- Patologías y fisiologías
('<div id="patoFisio">
    <h2>PATOLOGÍAS Y FISIOLOGÍAS</h2>
    <div class="contenido">
        <div id="saludCardiovascular">
        <h3>SALUD CARDIOVASCULAR E INMUNE</h3>
        <ol>
            <li>
            El consumo de huevos aporta proteínas de alto valor
            biológico, vitaminas y ácidos grasos esenciales
            </li>
            <li>
            Los huevos ricos en omega-3 pueden contribuir al
            mantenimiento de la salud cardiovascular
            </li>
            <li>
            Contienen nutrientes como vitamina D, selenio y zinc,
            relacionados con el sistema inmunitario
            </li>
        </ol>
        </div>
        <div id="importanciaFisiologica">
        <h3>IMPORTANCIA FISIOLÓGICA</h3>
        <ol>
            <li>
            Fundamental en etapas de crecimiento y desarrollo muscular
            </li>
            <li>
            Recomendado en dietas hiperproteicas por su alto valor
            biológico
            </li>
            <li>
            La colina presente en la yema participa en funciones
            neurológicas y cognitivas
            </li>
        </ol>
        </div>
        <div id="adaptacionesDieteticas">
        <h3>ADAPTACIONES DIETÉTICAS</h3>
        <ol>
            <li>
            Puede incorporarse en dietas equilibradas, deportivas y de
            recuperación nutricional
            </li>
            <li>
            En personas con colesterol alto en sangre, el consumo debe
            ajustarse según recomendación profesional
            </li>
        </ol>
        </div>
    </div>
</div>',4,1),
-- Métodos de análisis
('<div id="metodoAnalisis">
    <h2>MÉTODOS DE ANÁLISIS</h2>
    <div id="introduccion">
        Los métodos analíticos son técnicas físicas, químicas y
        microbiológicas que permiten evaluar la calidad, seguridad y
        composición de los alimentos, asegurando su aptitud para el
        consumo y el cumplimiento normativo.
    </div>
    <div class="contenido">
        <div id="ph">
        <h3>pH</h3>
        <ol>
            <li>Evalúa la frescura del huevo</li>
            <li>Huevo fresco: clara ligeramente alcalina</li>
            <li>Huevo viejo: aumento del pH (~9)</li>
        </ol>
        </div>
        <div id="densidad">
        <h3>DENSIDAD</h3>
        <ol>
            <li>Relación masa/volumen</li>
            <li>Indica frescura sin abrir el huevo</li>
            <li>Más fresco → más denso → se hunde</li>
        </ol>
        </div>
        <div id="analisisQuimicoEnzimatico">
        <h3>ANÁLISIS QUÍMICO Y ENZIMÁTICO</h3>
        <ol>
            <li>Detecta actividad bacteriana y frescura</li>
            <li>Incluye ácido láctico y D-3-hidroxibutírico</li>
            <li>Resultados en ppm</li>
        </ol>
        </div>
        <div id="fosforo">
        <h3>FÓSFORO</h3>
        <ol>
            <li>Evalúa calidad nutricional y cáscara</li>
            <li>Relacionado con resistencia del cascarón</li>
            <li>Medición por espectrofotometría</li>
        </ol>
        </div>
    </div>
</div>',5,1),
-- Curiosidades
('<div id="curiosidades">
    <h2>CURIOSIDADES</h2>
    <div id="contenTarjetas">
        <div class="sabiasQue">
        <div class="tarjeta">
            <div class="front">Color de la cácara</div>
            <div class="back" id="curiosidad">
            <ol>
                <li>El azul de debe a la biliverdina</li>
                <li>El café a la protoporfirina IX</li>
                <li>
                Pero que esto no afecta negativamente su calidad
                </li>
            </ol>
            </div>
        </div>
        </div>
        <div class="sabiasQue">
        <div class="tarjeta">
            <div class="front">
            Investigación
            <br /><br />
            Huevo Café VS Huevo Azul
            </div>
            <div class="back" id="curiosidad">
            <ol>
                <h3>SIMILITUDES</h3>
                <li>Peso similar ~62g</li>
                <li>
                Sin diferencias físicas relevantes, ambos son más
                grandes que los huevos de gallinas criollas comunes
                </li>
            </ol>
            <ol>
                <h3>COMPOSICIÓN NUTRICIONAL</h3>
                <li>
                - -- Huevo Café (Marans) -- -
                <ol>
                    <li>Mayor contenido de proteína.</li>
                    <li>
                    Más rico en ácido oleico (Omega 9) y DHA
                    (fundamental para el desarrollo cerebral).
                    </li>
                </ol>
                </li>
                <li>
                - -- Huevo Azul (Araucana) -- -
                <ol>
                    <li>
                    Mayor concentración de lípidos (extracto etéreo).
                    </li>
                    <li>
                    Más rico en ácidos linoleico (Omega 6) y
                    linolénico (Omega 3), que son esenciales para la
                    salud.
                    </li>
                </ol>
                </li>
            </ol>
            </div>
        </div>
        </div>
        <div class="sabiasQue">
        <div class="tarjeta">
            <div class="front">
            Opinión de los autores
            <br /><br />
            (Natalia, Mateo y Wiam)
            </div>
            <div class="back" id="curiosidad">
            En nuestra opinión, el huevo es uno de los alimentos más
            útiles y completos que existen, ya que es económico, fácil
            de preparar y muy nutritivo. Los ovoproductos nos parecen
            especialmente interesantes en contextos profesionales,
            donde la seguridad es fundamental. Sin embargo, en casa la
            mayoría de las personas siguen prefiriendo el huevo fresco
            por costumbre, y creemos que conocerlo desde un punto de
            vista científico ayuda a valorarlo más dentro de nuestra
            dieta.
            </div>
        </div>
        </div>
    </div>
</div>',6,1);