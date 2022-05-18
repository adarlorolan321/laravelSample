<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Position;
use PhpParser\Node\Expr\PostDec;

class PositionRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'position_name' => 'required|max: 20',
        ];
    }

    public function messages()
    {
        return
        [
            'position_name.required' => 'name is required',
            'position.max' => 'max lenght only 20 characters'
    
    ];
    }
}
