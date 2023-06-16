<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // le autorizzazioni le vediamo lunedi(credo..) altrimenti false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['string'],
            'thumb' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:20'],
            'series' => ['required', 'string', 'max:50'],
            'sale_date' => ['required', 'date'],
            'type' => ['required', 'string', 'max:255'],
            'artist' => ['required', 'string'],
            'writers' => ['required', 'string']
        ];
    }


    //MESSAGGI CUSTOM
    // /**
    //  * Get the error messages for the defined validation rules.
    //  *
    //  * @return array<string, string>
    //  */
    // public function messages(): array
    // {
    //     return [
    //         'title.required' => 'A title is required',
    //         'body.required' => 'A message is required',
    //     ];
    // }



    //ATTRUBUTI CUSTOM
    // /**
    //  * Get the error messages for the defined validation rules.
    //  *
    //  * @return array<string, string>
    //  */
   public function attributes(): array
   {
       return [
           'name' => 'Il Titolo del fumetto',
           'description' => 'La Descrizione del fumetto',
           'thumb' => 'Il link dell\'immagine del fumetto',
           'price' => 'Il prezzo del fumetto',
           'series' => 'La serie del fumetto',
           'sale_date' => 'La data di vendita del fumetto',
           'type' => 'Il Tipo di fumetto',
           'artist' => 'I Disegnatori del fumetto',
           'writers' => 'Gli Scrittori del fumetto'

       ];
   }

/**
 * Prepare the data for validation.
 */
// protected function prepareForValidation(): void
// {
//     $this->merge([
//         'atrist' => ,
//     ]);
// }


}
