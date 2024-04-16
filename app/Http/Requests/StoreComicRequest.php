<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required | max:255',
            'description' => 'required | max:5000',
            'thumb' => 'nullable | max:1000',
            'price' => 'required | max:8',
            'series' => 'required | max:255',
            'sale_date' => 'required | max:10',
            'type' => 'required | max:100',
            'artists' => 'required | max:500',
            'writers' => 'required | max:500',
        ];
    }

    public function messages(): array {
        return [
            'title.required' => '* Devi inserire un titolo valido',
            'title.max' => '* Il tuo titolo ha superato il numero massimo di caratteri :max caratteri', 
            'description.required' => '* Devi inserire una descrizione valida',
            'description.max' => '* La tua descrizione ha superato il numero massimo di caratteri :max caratteri', 
            'thumb.max' => '* Il tuo link ha superato il numero massimo di caratteri :max caratteri', 
            'price.required' => '* Devi inserire un prezzo valido',
            'price.max' => '* Il tuo prezzo ha superato il numero massimo di caratteri :max caratteri', 
            'series.required' => '* Devi inserire una serie valida',
            'series.max' => '* Il nome della serie ha superato il numero massimo di caratteri :max caratteri', 
            'sale_date.required' => '* Devi inserire una data valida in formato americano (YYYY-MM-DD)',
            'sale_date.max' => '* La data inserita ha superato il numero massimo di caratteri :max caratteri', 
            'type.required' => '* Devi inserire un tipo valido',
            'type.max' => '* Il tipo ha superato il numero massimo di caratteri :max caratteri', 
            'artists.required' => '* Devi inserire uno o più artisti validi',
            'artists.max' => '* Il nome degli artisti ha superato il numero massimo di caratteri :max caratteri', 
            'writers.required' => '* Devi inserire uno o più scrittori validi',
            'writers.max' => '* Il nome degli scrittori ha superato il numero massimo di caratteri :max caratteri', 
        ];
    }
}
