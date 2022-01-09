<?php

namespace App\Http\Requests;

use App\Models\Platform;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePlatformRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('platform_create'),
            response()->json(
                ['message' => 'This action is unauthorized.'],
                Response::HTTP_FORBIDDEN
            ),
        );

        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
