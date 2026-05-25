@extends('layouts.plantilla') <!-- Hereda la estructura principal del layout plantilla -->

@section('title', 'Mi Perfil') <!-- El titulo de la pagina que aparece en el navegador -->

@push('styles') <!-- el css he utilizado el perfil.css y el index.css -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    
@endpush

@section('content')
<div class="perfil-container">

    <!-- la tarjeta horizontal que contiene todo el contenido -->
    <div class="card-horizontal">
        <!-- El contenido que aparece el el izequierda -->
        <div class="perfil-izquierda">
            <div class="perfil-avatar-box"><!-- El foto de perfil -->
                <!-- Muestra la foto del usuario; si no tiene, usa una por defecto -->
                <!-- para que cuando un usuario, por un error o como no hay foto en el base de datos, con este codigo 
                va directamente usar el foto predeterminante  -->
                <img src="{{ asset('img/' . (auth()->user()->foto ?? 'huevo/huevos.png')) }}" alt="Avatar" class="perfil-avatar">
            </div>
            <div class="current-username" id="usernameDisplay">
                {{ auth()->user()->name }}<!--El nombre del usuario-->
            </div>
        </div>
        <!--El contenido que aparece en el lado derecho-->
        <div class="perfil-derecha">
            <form method="POST" action="{{ route('profile.update') }}"> 
                <!--Ir a la routes web.php busca el profile.update donde va ir, y el web.php manda que ir a 
                profileController que hacer cosa de funcion "update" 
                Pero antes de hacer cosa, primero va entrar a profileUpdate mira si coincide la cosa que pedir.-->
                @csrf <!-- Token de seguridad obligatorio de Laravel contra ataques CSRF -->
                @method('PATCH') <!--modificar y actualizar los datos que ya tenemos-->

                <div class="input-group">
                    <label for="foto">Elige tu avatar:</label> <!-- El selector para elegir el foto de perfil -->
                    <select name="foto" class="avatar-select">
                        <option value="huevo/huevos.png" {{ auth()->user()->foto == 'huevo/huevos.png' ? 'selected' : '' }}>Huevo</option>
                        <option value="carne/carne.png" {{ auth()->user()->foto == 'carne/carne.png' ? 'selected' : '' }}>Carne</option>
                        <option value="pescado/pescado.png" {{ auth()->user()->foto == 'pescado/pescado.png' ? 'selected' : '' }}>Pescado</option>
                        <option value="leche/leche.png" {{ auth()->user()->foto == 'leche/leche.png' ? 'selected' : '' }}>Leche</option>
                        <option value="harina/harina.png" {{ auth()->user()->foto == 'harina/harina.png' ? 'selected' : '' }}>Harina</option>
                        <option value="aceite/aceite.png" {{ auth()->user()->foto == 'aceite/aceite.png' ? 'selected' : '' }}>Aceite</option>
                    </select>
                </div>
                
                <!-- Sección para editar el nombre (oculta por defecto mediante inline CSS) -->
                <div class="edit-username-section" id="editSection" style="display:none;">
                    <div class="input-group">
                        <label for="name">Nuevo Nombre:</label>
                        <input type="text" name="name" value="{{ auth()->user()->name }}" required>
                    </div>
                </div>

                <!-- Botón para mostrar/ocultar el campo del nombre -->
                <button type="button" class="btn-edit" id="btnToggleEdit" onclick="toggleEditForm()">
                    Cambiar Nombre
                </button>
                <!-- Botón de tipo "submit" que envía el formulario para guardar los cambios -->
                <button type="submit" class="btn-save">Guardar Cambios</button>
            </form>

            <!--linea para dividir-->
            <hr class="dividir">

            <!-- Formulario para cerrar sesión -->
            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="btn-logout">Cerrar Sesión</button>
            </form>
        </div>

    </div>
</div>

<script>
function toggleEditForm() 
{
    var editSection = document.getElementById('editSection');
    var boton = document.getElementById('btnToggleEdit');
    
    if (editSection.style.display === 'none' || editSection.style.display === '') 
    {
        editSection.style.display = 'block';
        boton.innerText = 'Cancelar';
        boton.style.backgroundColor = '#6c757d'; 
    } 
    else 
    {
        editSection.style.display = 'none';
        boton.innerText = 'Cambiar Nombre';
        boton.style.backgroundColor = 'var(--color-principal)';
    }
}
</script>
@endsection