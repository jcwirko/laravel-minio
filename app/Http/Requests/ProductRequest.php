<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = 0;

        if(in_array($this->method(), ['PUT', 'PATCH'])) {
            $id = $this->route('product')['id'];
        }

        return [
            'name' => ['required', 'string', "unique:products,name,$id"],
            'description' => ['nullable', 'string'],
            'unit_price' => ['nullable', 'numeric'],
            'brand' => ['nullable', 'string'],
            'has_stock' => ['nullable'],
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function($validator) {
            if($validator->errors()->count()) {
                if(!in_array($this->method(), ['PUT', 'PATCH'])) {
                    $validator->errors()->add('post', true);
                }
            }
        });
    }
}
