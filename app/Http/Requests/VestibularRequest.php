<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VestibularRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'inst'=>'required',
            'ano'=> 'required|numeric',
            'site'=>'required',
            'mat'=>'required',
            'gram'=>'required',
            'lit'=>'required',
            'texto'=>'required',
            'ing'=>'required',
            'bio'=>'required',
            'quim'=>'required',
            'fis'=>'required',
            'hist'=>'required',
            'geo'=>'required',
            'socio'=>'required',
        ];
    }
}
