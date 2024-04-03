<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtablissementRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'Code' => 'required',
            'NomFr' => 'required',
            'NomAr' => 'required',
            'Categorie' => 'required',
            'person' => 'required',
            'commune' => 'required',
        ];
    }
}
