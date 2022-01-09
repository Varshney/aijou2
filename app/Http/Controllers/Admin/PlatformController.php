<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Platform;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlatformController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('platform_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.platform.index');
    }

    public function create()
    {
        abort_if(Gate::denies('platform_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.platform.create');
    }

    public function edit(Platform $platform)
    {
        abort_if(Gate::denies('platform_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.platform.edit', compact('platform'));
    }

    public function show(Platform $platform)
    {
        abort_if(Gate::denies('platform_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.platform.show', compact('platform'));
    }
}
