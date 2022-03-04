<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DniValidation implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $pattern = "/^(([0-9]){8}[A-Za-z])/";
        return (bool) preg_match($pattern, $value, $matches);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El DNI no se encuentra en el formato correcto (8 números y una letra final)';
    }
}
