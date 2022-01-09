<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('company.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.company.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="company.name">
        <div class="validation-message">
            {{ $errors->first('company.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.company.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('company.url') ? 'invalid' : '' }}">
        <label class="form-label" for="url">{{ trans('cruds.company.fields.url') }}</label>
        <input class="form-control" type="text" name="url" id="url" wire:model.defer="company.url">
        <div class="validation-message">
            {{ $errors->first('company.url') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.company.fields.url_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('company.publisher') ? 'invalid' : '' }}">
        <input class="form-control" type="checkbox" name="publisher" id="publisher" wire:model.defer="company.publisher">
        <label class="form-label inline ml-1" for="publisher">{{ trans('cruds.company.fields.publisher') }}</label>
        <div class="validation-message">
            {{ $errors->first('company.publisher') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.company.fields.publisher_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.companies.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>