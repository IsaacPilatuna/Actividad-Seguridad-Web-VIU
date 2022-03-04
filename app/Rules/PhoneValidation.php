<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneValidation implements Rule
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
        $pattern = "/^\+\d{9,12}/";
        return (bool) preg_match($pattern, $value, $matches);
        //
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El número de teléfono no tiene el formato correcto';
    }
}
