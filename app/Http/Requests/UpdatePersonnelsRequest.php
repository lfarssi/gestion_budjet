<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonnelsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'DDRP' => 'required',
            'CIN' => 'required',
            'nomFr' => 'required',
            'nomAr' => 'required',
            'grade' => 'required',
            'fonction' => 'required',
            'matiere' => 'required',
            'RIB' => 'required|min:8',
            'fichier' => 'required',
            'taux' => 'required',
        ];
    }
}
