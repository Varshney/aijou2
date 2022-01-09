<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('game_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Game" format="csv" />
                <livewire:excel-export model="Game" format="xlsx" />
                <livewire:excel-export model="Game" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.game.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.platform') }}
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.eu_release_date') }}
                            @include('components.table.sort', ['field' => 'eu_release_date'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.na_release_date') }}
                            @include('components.table.sort', ['field' => 'na_release_date'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.jpm_release_date') }}
                            @include('components.table.sort', ['field' => 'jpm_release_date'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.kr_release_date') }}
                            @include('components.table.sort', ['field' => 'kr_release_date'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.developer') }}
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.publisher') }}
                            @include('components.table.sort', ['field' => 'publisher.name'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.store_amazon') }}
                            @include('components.table.sort', ['field' => 'store_amazon'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.store_ea') }}
                            @include('components.table.sort', ['field' => 'store_ea'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.store_epic_games_store') }}
                            @include('components.table.sort', ['field' => 'store_epic_games_store'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.store_gog') }}
                            @include('components.table.sort', ['field' => 'store_gog'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.store_humble_bundle') }}
                            @include('components.table.sort', ['field' => 'store_humble_bundle'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.store_microsoft') }}
                            @include('components.table.sort', ['field' => 'store_microsoft'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.store_playstation') }}
                            @include('components.table.sort', ['field' => 'store_playstation'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.store_steam') }}
                            @include('components.table.sort', ['field' => 'store_steam'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.store_ubisoft') }}
                            @include('components.table.sort', ['field' => 'store_ubisoft'])
                        </th>
                        <th>
                            {{ trans('cruds.game.fields.store_nintendo_e_shop') }}
                            @include('components.table.sort', ['field' => 'store_nintendo_e_shop'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($games as $game)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $game->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $game->id }}
                            </td>
                            <td>
                                {{ $game->name }}
                            </td>
                            <td>
                                @foreach($game->platform as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $game->eu_release_date }}
                            </td>
                            <td>
                                {{ $game->na_release_date }}
                            </td>
                            <td>
                                {{ $game->jpm_release_date }}
                            </td>
                            <td>
                                {{ $game->kr_release_date }}
                            </td>
                            <td>
                                @foreach($game->developer as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                @if($game->publisher)
                                    <span class="badge badge-relationship">{{ $game->publisher->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $game->store_amazon }}
                            </td>
                            <td>
                                {{ $game->store_ea }}
                            </td>
                            <td>
                                {{ $game->store_epic_games_store }}
                            </td>
                            <td>
                                {{ $game->store_gog }}
                            </td>
                            <td>
                                {{ $game->store_humble_bundle }}
                            </td>
                            <td>
                                {{ $game->store_microsoft }}
                            </td>
                            <td>
                                {{ $game->store_playstation }}
                            </td>
                            <td>
                                {{ $game->store_steam }}
                            </td>
                            <td>
                                {{ $game->store_ubisoft }}
                            </td>
                            <td>
                                {{ $game->store_nintendo_e_shop }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('game_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.games.show', $game) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('game_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.games.edit', $game) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('game_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $game->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $games->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush