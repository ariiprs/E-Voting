<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CandidateStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'image' => 'required|image',
            'chairman' => 'required|string|max:255',
            'vice_chairman' => 'required|string|max:255',
            'vision' => 'required|string',
            'mission' => 'required|string',
            'sub_order' => 'required|integer|min:0|unique:candidates,sub_order',
        ];
    }
}
