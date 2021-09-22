<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'firstname' => 'required|string',
            'arrival_time' => 'required',
            'departure_time' => "required",
            'hotel' => 'required',
            'adult_nb' => 'required|integer',
            'child_nb' => 'required|integer',
            'predicted_arrival_time' => 'required',
            'comment' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute est requis',
            'name.string' => ':attribute doit être une chaine de caractères',
            'firstname.required' => ':attribute est requis',
            'firstname.string' => ':attribute doit être une chaine de caractères',
            'arrival_time.required' => ':attribute est requis',
            'departure_time.required' => ':attribute est requis',
            'hotel.required' => ':attribute est requis',
            'adult_nb.required' => ':attribute est requis',
            "adult_nb.integer" => ":attribute doit etre un chiffre",
            'child_nb.required' => ':attribute est requis',
            "child_nb.integer" => ":attribute doit etre un chiffre",
            'predicted_arrival_time.required' => ':attribute est requis',
            'comment.required' => ':attribute est requis',
        ];
    }

    public function attributes()
    {
        return [
            'name' => "Votre nom",
            'firstname' => "Votre prénom",
            'arrival_time' => "La date d'arrivée",
            'departure_time' => "La date de départ",
            'hotel' => "L'hotel",
            'adult_nb' => "Le nombre d'adultes",
            'child_nb' => "Le nombre d'enfants",
            'predicted_arrival_time' => "L'heure d'arrivée",
            'comment' => "Le commentaire"
        ];
    }
}
