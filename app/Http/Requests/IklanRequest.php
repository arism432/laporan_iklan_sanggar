<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IklanRequest extends FormRequest
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
        $rules = [];
        if (request()->isMethod('POST')) {
            $rules = [
                'daftar_ads' => 'required|max:15',
                'reach' => 'required',
                'amount_spent' => 'required',
                'cpm' =>  'required',
                'ctrl_all' => 'required',
                'cost_per_outbound_click' => 'required',
                'outbound_click' => 'required',
                'messaging_conversation' => 'required'
            ];
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'required' => ':attribute tidak boleh kosong',
            'max' => ':attribute melebihi 15 character',
        ];
    }

    public function attributes()
    {
        return [
            'daftar_ads' => 'daftar_ads',
            'reach' => 'reach',
            'amount_spent' => 'amount_spent',
            'cpm' => 'cpm',
            'ctrl_all' => 'ctrl_all',
            'cost_per_outbound_click' => 'cost_per_outbound_click',
            'outbound_click' => 'outbound_click',
            'messaging_conversation' => 'messaging_conversation'
        ];
    }
}