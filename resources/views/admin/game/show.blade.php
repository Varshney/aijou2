@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.game.title_singular') }}:
                    {{ trans('cruds.game.fields.id') }}
                    {{ $game->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.id') }}
                            </th>
                            <td>
                                {{ $game->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.boxart') }}
                            </th>
                            <td>
                                @foreach($game->boxart as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.name') }}
                            </th>
                            <td>
                                {{ $game->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.platform') }}
                            </th>
                            <td>
                                @foreach($game->platform as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.eu_release_date') }}
                            </th>
                            <td>
                                {{ $game->eu_release_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.na_release_date') }}
                            </th>
                            <td>
                                {{ $game->na_release_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.jpm_release_date') }}
                            </th>
                            <td>
                                {{ $game->jpm_release_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.kr_release_date') }}
                            </th>
                            <td>
                                {{ $game->kr_release_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.developer') }}
                            </th>
                            <td>
                                @foreach($game->developer as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.publisher') }}
                            </th>
                            <td>
                                @if($game->publisher)
                                    <span class="badge badge-relationship">{{ $game->publisher->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.store_amazon') }}
                            </th>
                            <td>
                                {{ $game->store_amazon }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.store_ea') }}
                            </th>
                            <td>
                                {{ $game->store_ea }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.store_epic_games_store') }}
                            </th>
                            <td>
                                {{ $game->store_epic_games_store }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.store_gog') }}
                            </th>
                            <td>
                                {{ $game->store_gog }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.store_humble_bundle') }}
                            </th>
                            <td>
                                {{ $game->store_humble_bundle }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.store_microsoft') }}
                            </th>
                            <td>
                                {{ $game->store_microsoft }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.store_playstation') }}
                            </th>
                            <td>
                                {{ $game->store_playstation }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.store_steam') }}
                            </th>
                            <td>
                                {{ $game->store_steam }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.store_ubisoft') }}
                            </th>
                            <td>
                                {{ $game->store_ubisoft }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.game.fields.store_nintendo_e_shop') }}
                            </th>
                            <td>
                                {{ $game->store_nintendo_e_shop }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('game_edit')
                    <a href="{{ route('admin.games.edit', $game) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.games.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection