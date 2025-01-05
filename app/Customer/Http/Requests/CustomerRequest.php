<?php

declare(strict_types=1);

namespace App\Customer\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CustomerRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'document_type' => 'required|in:cpf,cnpj',
            'document_number' => 'required|string|max:255|unique:customers',
            'telephone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'logo' => 'string|max:255',
            'reason_for_registration' => 'required|string|max:255',
            'number_of_documents_per_month' => 'required|integer|min:1',
            'customer_signature' => 'required|string|max:255',
            'state_id' => 'required|integer|exists:states,id',
            'city_id' => 'required|integer|exists:cities,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatório.',
            'name.max' => 'O nome não pode ter mais de 255 caracteres.',

            'document_type.required' => 'O tipo de documento é obrigatório.',
            'document_type.in' => 'O tipo de documento deve ser "cpf" ou "cnpj".',

            'document_number.required' => 'O número do documento é obrigatório.',
            'document_number.unique' => 'Já existe um cliente com esse número de documento.',

            'telephone.required' => 'O telefone é obrigatório.',

            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'O e-mail deve ser válido.',
            'email.unique' => 'Já existe um cliente com esse e-mail.',

            'logo.string' => 'O logo deve ser uma string.',

            'reason_for_registration.required' => 'O motivo do cadastro é obrigatório.',

            'number_of_documents_per_month.required' => 'O número de documentos por mês é obrigatório.',
            'number_of_documents_per_month.min' => 'O número de documentos por mês deve ser no mínimo 1.',

            'customer_signature.required' => 'A assinatura do cliente é obrigatória.',

            'state_id.required' => 'O estado é obrigatório.',

            'city_id.required' => 'A cidade é obrigatória.',
        ];
    }


    protected function failedValidation(Validator $validator)
    {


        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
        ], 400));
    }
}
