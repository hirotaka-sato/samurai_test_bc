<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class PracticeValidator extends Validator
{
    public function validatePractice($attribute, $value, $parameters) {
        return $value % 2 == 0;
    }
}
