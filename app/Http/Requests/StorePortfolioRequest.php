<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePortfolioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if ($this->method() === 'POST') {
            return [
                'title' => 'required|string|max:100',
                'image' => 'required|mimes:jpg,jpeg ,png,gif',
                'url' => 'nullable',
                'status' => 'nullable|integer|in:0,1',
            ];
        } else {
            return [
                'title' => 'required|string|max:100',
                'image' => 'mimes:jpg,jpeg ,png,gif',
                'url' => 'nullable',
                'status' => 'nullable|integer|in:0,1',
            ];
        }
    }

}