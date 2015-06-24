<?php

namespace Brew\Http\Requests;

use Brew\Http\Requests\Request;

class Recipe extends Request
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
            'brewery_id' => 'required|number',
            'style_id' => 'required|number',
            'name' => 'required',
            'type' => 'required',
            'yield' => 'required',
            'original_g' => 'required|decimal',
            'final_g' => 'required|decimal',
            'alcohol' => 'required|decimal',
            'bitterness' => 'required|number',
        ];
    }
}
