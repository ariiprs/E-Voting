<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoterStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ];
    }
}
