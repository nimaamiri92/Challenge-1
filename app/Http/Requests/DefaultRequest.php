<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DefaultRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string'],
            'quantity' => [
                'required',
                'integer'],
            'price' => [
                'required',
                'integer'],
            'type' => [
                'required',

                Rule::in(['refrigerator', 'normal'])
            ],
        ];
    }
}
