<?php

namespace App\Http\Livewire\Game;

use App\Models\Company;
use App\Models\Game;
use App\Models\Platform;
use Livewire\Component;

class Create extends Component
{
    public Game $game;

    public array $platform = [];

    public array $developer = [];

    public array $listsForFields = [];

    public function mount(Game $game)
    {
        $this->game = $game;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.game.create');
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
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['platform']  = Platform::pluck('name', 'id')->toArray();
        $this->listsForFields['developer'] = Company::pluck('name', 'id')->toArray();
        $this->listsForFields['publisher'] = Company::pluck('name', 'id')->toArray();
    }
}
