@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.platform.title_singular') }}:
                    {{ trans('cruds.platform.fields.id') }}
                    {{ $platform->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.platform.fields.id') }}
                            </th>
                            <td>
                                {{ $platform->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.platform.fields.name') }}
                            </th>
                            <td>
                                {{ $platform->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.platform.fields.acronym') }}
                            </th>
                            <td>
                                {{ $platform->acronym }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('platform_edit')
                    <a href="{{ route('admin.platforms.edit', $platform) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.platforms.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection