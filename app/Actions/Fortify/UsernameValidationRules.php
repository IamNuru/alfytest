<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Username;

trait UsernameValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function usernameRules()
    {
        /* return ['required', 'string', new Password, 'confirmed']; */
        return ['required', 'string', 'min:3', 'max:255','unique:users', new Username];
    }
}
