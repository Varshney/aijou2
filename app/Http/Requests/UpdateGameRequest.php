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
            'kr_release_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'ww_release_date' => [
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
            'store_amazon' => [
                'string',
                'nullable',
            ],
            'store_ea' => [
                'string',
                'nullable',
            ],
            'store_epic_games_store' => [
                'string',
                'nullable',
            ],
            'store_gog' => [
                'string',
                'nullable',
            ],
            'store_humble_bundle' => [
                'string',
                'nullable',
            ],
            'store_microsoft' => [
                'string',
                'nullable',
            ],
            'store_playstation' => [
                'string',
                'nullable',
            ],
            'store_steam' => [
                'string',
                'nullable',
            ],
            'store_ubisoft' => [
                'string',
                'nullable',
            ],
            'store_nintendo_e_shop' => [
                'string',
                'nullable',
            ],
        ];
    }
}
