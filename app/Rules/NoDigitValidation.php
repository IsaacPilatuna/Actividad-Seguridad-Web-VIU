<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NoDigitValidation implements Rule
{
    public function __construct()
    {
        //
    }

    var $attribute = null;

    public function passes($attribute, $value)
    {
        $this->attribute=$attribute;
        $pattern = "/^([^0-9]*)$/";
        return (bool) preg_match($pattern, $value, $matches);
    }

    public function message()
    {
        return 'El campo '.$this->attribute.' no debe contener números';
    }
}
