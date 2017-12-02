<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
             'name' => 'required',
            //  'typenews_id' => 'required',
             'image' => 'mimes:png,jpeg',
         ];
     }

     public function message() {
       return      [
           'name.required'=>'Please fill name',
           'image.mimes'=>'Please fill img is png,jpg',
           'typenews_id.required'=>'Please choose type',
       ];
     }
}
