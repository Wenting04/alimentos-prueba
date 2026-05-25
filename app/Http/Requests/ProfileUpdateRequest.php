<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [ /**'required', */'string','lowercase','email','max:255',Rule::unique(User::class)->ignore($this->user()->id)],
            // para cambiar nombre y foto del usuario, no necesidad email. 
            //entonces he comentado el required del email, para que no sea obligatorio cambiar el email cada vez que se quiera cambiar el nombre o la foto. 
             'foto' => ['nullable', 'string', 'max:255'],
        ];
    }
}
