<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreRequest extends FormRequest
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
            'title' => 'required|unique:books|max:100',
            'publication_date' => 'required|date',
            'isbn' => 'required',
            'no_of_pages' => 'required|integer',
            'author_id' => 'required|integer',
            'publisher_id' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please enter title',
            'title.unique' => 'Book title already exists',
            'author_id.required' => 'Please provide author of the book',
            'publisher_id.required' => 'Please provide publisher of the book',
        ];
    }
}
