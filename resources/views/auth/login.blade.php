<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" 
                name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

                <div style="position: relative;" class="mt-1">
                    <x-text-input id="password" class="block w-full" 
                                style="padding-right: 40px;" 
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                    <button type="button" 
                            id="togglePassword" 
                            style="position: absolute; 
                            right: 10px; 
                            top: 50%; 
                            transform: translateY(-50%);
                            cursor: pointer; 
                            display: flex; 
                            align-items: center;">
                        <img id="huevoIcono" src="{{ asset('img/huevoSecreto.png') }}" 
                            style="width: 24px; 
                            height: 24px;" 
                            alt="Mostrar contraseña">
                    </button> <!--pulsar el icono de huevo va visible o oculto la contraseña-->
                </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" 
                    class="rounded 
                    border-gray-300 
                    text-indigo-600 
                    shadow-sm 
                    focus:ring-indigo-500" 
                    name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-center mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md 
                    focus:outline-none 
                    focus:ring-2 focus:ring-offset-2 
                    focus:ring-indigo-500" 
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <!--primary-button es un componente de blade que se encuentra en resources/views/components/primary-button.blade.php, es un botón personalizado con estilos-->
            <!--x es para llamar a un componente de blade, que se encuentra en resources/views/components/primary-button.blade.php--> 
            <x-primary-button class="ms-3">  <!--ms-3 es margin start 3, para separar el botón -->
                {{ __('Iniciar sesión') }}
            </x-primary-button>
            
            <!--el class del crear usuario es el mismo que el de primary-button, pero sin ser un componente-->
            <a href="{{ route('register') }}" 
                class=" ms-3 inline-flex items-center px-4 py-2 bg-gray-800 
                border border-transparent rounded-md font-semibold text-xs 
                text-white uppercase tracking-widest hover:bg-gray-700 transition ease-in-out duration-150">
                {{ __('Crear Usuario') }} 
            </a>    
        </div>
    </form>
    <!-- el js para mostrar/ocultar contraseña -->
    <script> 
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('password');
            const boton = document.getElementById('togglePassword');
            const huevoIcono = document.getElementById('huevoIcono');

            //el cada png el huevo cerrado y el huevo abierto, para mostrar o ocultar la contraseña
            const oculto = "{{ asset('img/huevoSecreto.png') }}";
            const visible = "{{ asset('img/huevoVisible.png') }}";

            boton.addEventListener('click', function () 
            {
                if (passwordInput.type === 'password') 
                {
                    passwordInput.type = 'text';
                    huevoIcono.src = visible;
                    huevoIcono.alt = "Ocultar contraseña";
                } 
                else 
                {
                    passwordInput.type = 'password';
                    huevoIcono.src = oculto;
                    huevoIcono .alt = "Mostrar contraseña";
                }
            });
        });
    </script>
</x-guest-layout>
