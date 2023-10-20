<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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

        if ($this->method() == 'post') {

            return [
                'title' => 'required|string|max:100',
                'icon' => 'required|image|mimes:jpg,jpeg ,png,gif',
                'discription' => 'required|string|max:170',
                'status' => 'required|in:0,1',
            ];
        } else {
            return [
                'title' => 'required|string|max:100',
                'icon' => 'nullable|image|mimes:jpg,jpeg ,png,gif',
                'discription' => 'required|string|max:170',
                'status' => 'required|in:0,1',
            ];
        }
    }
}