<div class="pathology-container">
    <div class="subtitle-wrapper">
        <h3 id="relationTitle">Bioquímica y calidad de la carne</h3>
    </div>

    <div class="pathology-grid">
        
        <div class="pathology-item" data-type="tech">
            <div class="item-header">
                <span class="icon">🔬</span>
                <span class="badge">Técnico</span>
            </div>
            <h4>pH y Rigor Mortis</h4>
            <p>
                Tras el sacrificio, el pH muscular disminuye por la formación de <strong>ácido láctico</strong>. Los músculos se vuelven rígidos y se ablandan en la maduración.
            </p>
        </div>

        <div class="pathology-item" data-type="benefit">
            <div class="item-header">
                <span class="icon">📊</span>
                <span class="badge">Estándar</span>
            </div>
            <h4>Rangos Óptimos</h4>
            <p>
                El pH ideal de la carne madura de forma correcta suele situarse estrictamente entre los valores de <strong>5,4 y 5,7</strong> para garantizar su calidad.
            </p>
        </div>

        <div class="pathology-item" data-type="risk">
            <div class="item-header">
                <span class="icon">⚠️</span>
                <span class="badge">Alerta</span>
            </div>
            <h4>Alteración PSE</h4>
            <p>
                Carne <strong>pálida, blanda y exudativa</strong> (Pale, Soft, Exudative). Presenta una rápida caída del pH y una marcada pérdida de agua constitucional.
            </p>
            <div class="image-placeholder">
                <img src="{{ asset('img/carne/alteracion_pse.jpg') }}" alt="Carne con alteración PSE">
            </div>
        </div>

        <div class="pathology-item" data-type="risk">
            <div class="item-header">
                <span class="icon">🚫</span>
                <span class="badge">Alerta</span>
            </div>
            <h4>Alteración DFD</h4>
            <p>
                Carne <strong>oscura, firme y seca</strong> (Dark, Firm, Dry). Mantiene un pH final elevado debido al agotamiento prematuro del glucógeno antes del sacrificio.
            </p>
            <div class="image-placeholder">
                <img src="{{ asset('img/carne/alteracion_dfd.jpg') }}" alt="Carne con alteración DFD">
            </div>
        </div>

        <div class="pathology-item" data-type="risk">
            <div class="item-header">
                <span class="icon">🧫</span>
                <span class="badge">Microbiología</span>
            </div>
            <h4>Deterioro Microbiano</h4>
            <p>
                Un pH inadecuado y una <strong>actividad de agua (Aw) elevada</strong> favorecen el desarrollo bacteriano, comprometiendo la frescura y el riesgo sanitario.
            </p>
        </div>

    </div>
</div>

<div class="pathology-container">
    <div class="subtitle-wrapper">
        <h3 id="relationTitle">Microorganismos en la Carne</h3>
    </div>

    <div class="pathology-grid">

        <!-- Microorganismos -->
        @include('alimentos.carne.componentes.microorganismos')

    </div>
</div>

<div class="pathology-container">
    <div class="subtitle-wrapper">
        <h3 id="relationTitle">Simulador de pH</h3>
    </div>

    <div class="pathology-grid">

        <!-- Simulador -->
        @include('alimentos.carne.componentes.simulador')

    </div>
</div>