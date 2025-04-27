<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckPrime implements Rule
{
    public $parameter;
    public function __construct($parameter)
    {
        $this->parameter = (int)$parameter;
    }

    public function passes($attribute, $value)
    {
        if ($value < $this->parameter){
            return false;
        }elseif ($value == 1){
            return false;
        }
        for ($i = 2; $i <= sqrt($value); $i++){
            if($value % $i == 0){
                return false;
            }
        }
        return true;
    }

    public function message()
    {
        return 'The number is not prime.';
    }
}
