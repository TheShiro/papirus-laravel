<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        $rules = [
            'title' => 'required|string|unique:books,title',
            'description' => '',
            'author' => 'string',
            'pageCount' => 'integer',
            'category' => 'integer',
            'image' => 'string',
            'alias' => 'required|string|unique:books,alias'
        ];

        switch ($this->getMethod()) {
            case 'POST':
                return $rules;
            case 'PUT':
                return [
                    'id' => 'required|integer|unique:books,id',
                    'title' => [
                        'required',
                        Rule::unique('books')->ignore($this->title, 'title')
                    ]
                ] + $rules;
            case 'DELETE':
                return [
                    'id' => 'required|integer|exists:books,id'
                ];
        }
    }
}
