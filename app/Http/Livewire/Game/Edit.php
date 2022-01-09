<?php

namespace App\Http\Livewire\Game;

use App\Models\Company;
use App\Models\Game;
use App\Models\Platform;
use Livewire\Component;

class Edit extends Component
{
    public Game $game;

    public array $platform = [];

    public array $developer = [];

    public array $listsForFields = [];

    public function mount(Game $game)
    {
        $this->game      = $game;
        $this->platform  = $this->game->platform()->pluck('id')->toArray();
        $this->developer = $this->game->developer()->pluck('id')->toArray();
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.game.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->game->save();
        $this->game->platform()->sync($this->platform);
        $this->game->developer()->sync($this->developer);

        return redirect()->route('admin.games.index');
    }

    protected function rules(): array
    {
        return [
            'game.name' => [
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
            'game.eu_release_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'game.na_release_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'game.jpm_release_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'game.kr_release_date' => [
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
            'game.publisher_id' => [
                'integer',
                'exists:companies,id',
                'nullable',
            ],
            'game.store_amazon' => [
                'string',
                'nullable',
            ],
            'game.store_ea' => [
                'string',
                'nullable',
            ],
            'game.store_epic_games_store' => [
                'string',
                'nullable',
            ],
            'game.store_gog' => [
                'string',
                'nullable',
            ],
            'game.store_humble_bundle' => [
                'string',
                'nullable',
            ],
            'game.store_microsoft' => [
                'string',
                'nullable',
            ],
            'game.store_playstation' => [
                'string',
                'nullable',
            ],
            'game.store_steam' => [
                'string',
                'nullable',
            ],
            'game.store_ubisoft' => [
                'string',
                'nullable',
            ],
            'game.store_nintendo_e_shop' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['platform']  = Platform::pluck('name', 'id')->toArray();
        $this->listsForFields['developer'] = Company::pluck('name', 'id')->toArray();
        $this->listsForFields['publisher'] = Company::pluck('name', 'id')->toArray();
    }
}
