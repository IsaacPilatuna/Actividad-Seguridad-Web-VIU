<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class StrongPasswordValidation implements Rule
{
    public function __construct()
    {

    }

    public function passes($attribute, $value)
    {
        $pattern = "/^(?=.*\d)(?=.*[$&+,:;=?@#|<>.^*()%!-])(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{10,}/";
        return (bool) preg_match($pattern, $value, $matches);
    }
    public function message()
    {
        return 'La contraseña no es lo suficientemente fuerte, debe contener al menos una mayúscula, un dígito, un carácter especial y al menos 10 carácteres de longitud';
    }
}
