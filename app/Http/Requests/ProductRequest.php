<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'is_custom' => 'boolean',
            'images' => 'nullable|string', // You might want to adjust this based on the actual format of images
            'price' => 'required|integer|min:0',
            'inventory' => 'required',
            'seo' => 'nullable|json',
            'status' => 'boolean',
            'category_id' => 'nullable|exists:categories,id', // Assuming 'categories' is the related table name
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
