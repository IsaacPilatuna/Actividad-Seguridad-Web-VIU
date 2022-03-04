<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IbanAccountNumberValidation implements Rule
{
    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
        $pattern = "/^([a-zA-z]){2}\d{2}\s?\d{4}\s?\d{4}\s?\d{2}\s?\d{10}/";
        return (bool) preg_match($pattern, $value, $matches);
    }

    public function message()
    {
        return 'El formato del número de cuenta IBAN no es correcto';
    }
}
