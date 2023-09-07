<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $userId = $this->user()->id;

        return [
            'username' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique('users')->ignore($userId)],
            'image' => ['image', 'file', 'max:20000'],
        ];
    }
}
