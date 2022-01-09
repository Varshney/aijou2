<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('mediaCollections.game_boxart') ? 'invalid' : '' }}">
        <label class="form-label" for="boxart">{{ trans('cruds.game.fields.boxart') }}</label>
        <x-dropzone id="boxart" name="boxart" action="{{ route('admin.games.storeMedia') }}" collection-name="game_boxart" max-file-size="2" max-width="4096" max-height="4096" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.game_boxart') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.boxart_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.game.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="game.name">
        <div class="validation-message">
            {{ $errors->first('game.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('platform') ? 'invalid' : '' }}">
        <label class="form-label" for="platform">{{ trans('cruds.game.fields.platform') }}</label>
        <x-select-list class="form-control" id="platform" name="platform" wire:model="platform" :options="$this->listsForFields['platform']" multiple />
        <div class="validation-message">
            {{ $errors->first('platform') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.platform_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.eu_release_date') ? 'invalid' : '' }}">
        <label class="form-label" for="eu_release_date">{{ trans('cruds.game.fields.eu_release_date') }}</label>
        <x-date-picker class="form-control" wire:model="game.eu_release_date" id="eu_release_date" name="eu_release_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('game.eu_release_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.eu_release_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.na_release_date') ? 'invalid' : '' }}">
        <label class="form-label" for="na_release_date">{{ trans('cruds.game.fields.na_release_date') }}</label>
        <x-date-picker class="form-control" wire:model="game.na_release_date" id="na_release_date" name="na_release_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('game.na_release_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.na_release_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.jpm_release_date') ? 'invalid' : '' }}">
        <label class="form-label" for="jpm_release_date">{{ trans('cruds.game.fields.jpm_release_date') }}</label>
        <x-date-picker class="form-control" wire:model="game.jpm_release_date" id="jpm_release_date" name="jpm_release_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('game.jpm_release_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.jpm_release_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.kr_release_date') ? 'invalid' : '' }}">
        <label class="form-label" for="kr_release_date">{{ trans('cruds.game.fields.kr_release_date') }}</label>
        <x-date-picker class="form-control" wire:model="game.kr_release_date" id="kr_release_date" name="kr_release_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('game.kr_release_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.kr_release_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.ww_release_date') ? 'invalid' : '' }}">
        <label class="form-label" for="ww_release_date">{{ trans('cruds.game.fields.ww_release_date') }}</label>
        <x-date-picker class="form-control" wire:model="game.ww_release_date" id="ww_release_date" name="ww_release_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('game.ww_release_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.ww_release_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('developer') ? 'invalid' : '' }}">
        <label class="form-label" for="developer">{{ trans('cruds.game.fields.developer') }}</label>
        <x-select-list class="form-control" id="developer" name="developer" wire:model="developer" :options="$this->listsForFields['developer']" multiple />
        <div class="validation-message">
            {{ $errors->first('developer') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.developer_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.publisher_id') ? 'invalid' : '' }}">
        <label class="form-label" for="publisher">{{ trans('cruds.game.fields.publisher') }}</label>
        <x-select-list class="form-control" id="publisher" name="publisher" :options="$this->listsForFields['publisher']" wire:model="game.publisher_id" />
        <div class="validation-message">
            {{ $errors->first('game.publisher_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.publisher_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.store_amazon') ? 'invalid' : '' }}">
        <label class="form-label" for="store_amazon">{{ trans('cruds.game.fields.store_amazon') }}</label>
        <input class="form-control" type="text" name="store_amazon" id="store_amazon" wire:model.defer="game.store_amazon">
        <div class="validation-message">
            {{ $errors->first('game.store_amazon') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.store_amazon_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.store_ea') ? 'invalid' : '' }}">
        <label class="form-label" for="store_ea">{{ trans('cruds.game.fields.store_ea') }}</label>
        <input class="form-control" type="text" name="store_ea" id="store_ea" wire:model.defer="game.store_ea">
        <div class="validation-message">
            {{ $errors->first('game.store_ea') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.store_ea_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.store_epic_games_store') ? 'invalid' : '' }}">
        <label class="form-label" for="store_epic_games_store">{{ trans('cruds.game.fields.store_epic_games_store') }}</label>
        <input class="form-control" type="text" name="store_epic_games_store" id="store_epic_games_store" wire:model.defer="game.store_epic_games_store">
        <div class="validation-message">
            {{ $errors->first('game.store_epic_games_store') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.store_epic_games_store_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.store_gog') ? 'invalid' : '' }}">
        <label class="form-label" for="store_gog">{{ trans('cruds.game.fields.store_gog') }}</label>
        <input class="form-control" type="text" name="store_gog" id="store_gog" wire:model.defer="game.store_gog">
        <div class="validation-message">
            {{ $errors->first('game.store_gog') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.store_gog_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.store_humble_bundle') ? 'invalid' : '' }}">
        <label class="form-label" for="store_humble_bundle">{{ trans('cruds.game.fields.store_humble_bundle') }}</label>
        <input class="form-control" type="text" name="store_humble_bundle" id="store_humble_bundle" wire:model.defer="game.store_humble_bundle">
        <div class="validation-message">
            {{ $errors->first('game.store_humble_bundle') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.store_humble_bundle_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.store_microsoft') ? 'invalid' : '' }}">
        <label class="form-label" for="store_microsoft">{{ trans('cruds.game.fields.store_microsoft') }}</label>
        <input class="form-control" type="text" name="store_microsoft" id="store_microsoft" wire:model.defer="game.store_microsoft">
        <div class="validation-message">
            {{ $errors->first('game.store_microsoft') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.store_microsoft_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.store_playstation') ? 'invalid' : '' }}">
        <label class="form-label" for="store_playstation">{{ trans('cruds.game.fields.store_playstation') }}</label>
        <input class="form-control" type="text" name="store_playstation" id="store_playstation" wire:model.defer="game.store_playstation">
        <div class="validation-message">
            {{ $errors->first('game.store_playstation') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.store_playstation_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.store_steam') ? 'invalid' : '' }}">
        <label class="form-label" for="store_steam">{{ trans('cruds.game.fields.store_steam') }}</label>
        <input class="form-control" type="text" name="store_steam" id="store_steam" wire:model.defer="game.store_steam">
        <div class="validation-message">
            {{ $errors->first('game.store_steam') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.store_steam_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.store_ubisoft') ? 'invalid' : '' }}">
        <label class="form-label" for="store_ubisoft">{{ trans('cruds.game.fields.store_ubisoft') }}</label>
        <input class="form-control" type="text" name="store_ubisoft" id="store_ubisoft" wire:model.defer="game.store_ubisoft">
        <div class="validation-message">
            {{ $errors->first('game.store_ubisoft') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.store_ubisoft_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('game.store_nintendo_e_shop') ? 'invalid' : '' }}">
        <label class="form-label" for="store_nintendo_e_shop">{{ trans('cruds.game.fields.store_nintendo_e_shop') }}</label>
        <input class="form-control" type="text" name="store_nintendo_e_shop" id="store_nintendo_e_shop" wire:model.defer="game.store_nintendo_e_shop">
        <div class="validation-message">
            {{ $errors->first('game.store_nintendo_e_shop') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.game.fields.store_nintendo_e_shop_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.games.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>