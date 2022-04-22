<?php

namespace App\Http\Requests;

use App\Models\VillaOwner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVillaOwnerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('villa_owner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:villa_owners,id',
        ];
    }
}
