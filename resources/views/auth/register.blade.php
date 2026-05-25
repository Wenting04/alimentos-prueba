<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- nombre -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" 
            name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>


        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" 
            name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <!-- Contraseña -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <div style="position: relative;" class="mt-1">
                <x-text-input id="password" class="block w-full" 
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

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

        <!-- Confirmar Contraseña -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            
            <div style="position: relative;" class="mt-1">
                <x-text-input id="password_confirmation" class="block w-full"  
                            type="password"
                            name="password_confirmation"
                            required autocomplete="new-password" />

                <button type="button" 
                        id="passwordConfirmationToggle" 
                        style="position: absolute; 
                        right: 10px; 
                        top: 50%; 
                        transform: translateY(-50%);
                        cursor: pointer; 
                        display: flex; 
                        align-items: center;
                        background: none; 
                        border: none;">

                    <img id="huevoIconoConfirmation" src="{{ asset('img/huevoSecreto.png') }}" 
                        style="width: 24px; 
                        height: 24px;" 
                        alt="Mostrar contraseña">
                </button> <!--pulsar el icono de huevo va visible o oculto la contraseña-->
            </div>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md 
                focus:outline-none 
                focus:ring-2 
                focus:ring-offset-2 
                focus:ring-indigo-500" 
                href="{{ route('login') }}">
                {{ __('Ya tengo la cuenta') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
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

            const passwordConfirmInput = document.getElementById('password_confirmation');
            const botonConfirm = document.getElementById('passwordConfirmationToggle');
            const huevoIconoConfirmation = document.getElementById('huevoIconoConfirmation');

            botonConfirm.addEventListener('click', function ()
            {
                if (passwordConfirmInput.type === 'password') 
                {
                    passwordConfirmInput.type = 'text';
                    huevoIconoConfirmation.src = visible;
                    huevoIconoConfirmation.alt = "Ocultar contraseña";
                } 
                else 
                {
                    passwordConfirmInput.type = 'password';
                    huevoIconoConfirmation.src = oculto;
                    huevoIconoConfirmation.alt = "Mostrar contraseña";
                }
            });
        });
    </script>
</x-guest-layout>
