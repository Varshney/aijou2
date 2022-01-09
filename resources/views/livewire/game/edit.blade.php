<form wire:submit.prevent="submit" class="pt-3">

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

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.games.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>