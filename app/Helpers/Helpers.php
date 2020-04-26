<?php


namespace App\Helpers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Helpers
{

    public static function validation(Request $request,  array $rules) {
        $validator = Validator::make($request->all(), $rules);
        $errors = null;
        if (count($validator->messages()) != 0) {
            $errors = $validator->messages();
        }
        return $errors;
    }
}
