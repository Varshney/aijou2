<?php

namespace App\Http\Requests;

use App\Models\Game;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateGameRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('game_edit'),
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
            'platform' => [
                'array',
            ],
            'platform.*.id' => [
                'integer',
                'exists:platforms,id',
            ],
            'eu_release_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'na_release_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'jpm_release_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'developer' => [
                'array',
            ],
            'developer.*.id' => [
                'integer',
                'exists:companies,id',
            ],
            'publisher_id' => [
                'integer',
                'exists:companies,id',
                'nullable',
            ],
        ];
    }
}
