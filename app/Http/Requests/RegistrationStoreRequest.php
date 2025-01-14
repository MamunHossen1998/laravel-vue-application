<?php

namespace App\Http\Requests;
;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class RegistrationStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|',
            'password_confirm' => 'required|same:password'  
        ];
    }
    public function messages()
    {
        $messages = [
            'name.required'    => 'Please enter the name',
            'email.required'    => 'Please enter the email',
        ];
        return $messages;
    }
}
