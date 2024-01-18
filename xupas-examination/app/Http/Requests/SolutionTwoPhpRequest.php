<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
class SolutionTwoPhpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
      //just true for exam purposes
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
       //initialize
       $rules = [];

       /**-------------------------------------------------------
         * [POST] only rules
         * ------------------------------------------------------*/
        if ($this->getMethod() == 'POST')
        {
          $rules += [
              'sentence' => ['required'],
              'maxCount' => ['required','gt:-1','numeric'],

          ];
        }

        return $rules;
    }

    /**
     * Deal with the errors - send messages to the frontend
     */
    public function failedValidation(Validator $validator)
    {

        $errors = $validator->errors();
        $messages = '';
        foreach ($errors->all() as $message)
        {
            $messages .= "<li>$message</li>";
        }

        abort(409,$messages);
    }

}
