<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('platform.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.platform.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="platform.name">
        <div class="validation-message">
            {{ $errors->first('platform.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.platform.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('platform.acronym') ? 'invalid' : '' }}">
        <label class="form-label required" for="acronym">{{ trans('cruds.platform.fields.acronym') }}</label>
        <input class="form-control" type="text" name="acronym" id="acronym" required wire:model.defer="platform.acronym">
        <div class="validation-message">
            {{ $errors->first('platform.acronym') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.platform.fields.acronym_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.platforms.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>