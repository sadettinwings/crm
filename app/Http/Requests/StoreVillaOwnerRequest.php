<?php

namespace App\Http\Requests;

use App\Models\VillaOwner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVillaOwnerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('villa_owner_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'bank_account_info' => [
                'string',
                'nullable',
            ],
            'payment_type' => [
                'string',
                'nullable',
            ],
        ];
    }
}
