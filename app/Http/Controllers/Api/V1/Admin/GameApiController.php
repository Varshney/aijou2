<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Http\Resources\Admin\GameResource;
use App\Models\Game;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GameApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('game_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new GameResource(Game::with(['platform', 'developer', 'publisher'])->get());
    }

    public function store(StoreGameRequest $request)
    {
        $game = Game::create($request->validated());
        $game->platform()->sync($request->input('platform', []));
        $game->developer()->sync($request->input('developer', []));

        return (new GameResource($game))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Game $game)
    {
        abort_if(Gate::denies('game_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new GameResource($game->load(['platform', 'developer', 'publisher']));
    }

    public function update(UpdateGameRequest $request, Game $game)
    {
        $game->update($request->validated());
        $game->platform()->sync($request->input('platform', []));
        $game->developer()->sync($request->input('developer', []));

        return (new GameResource($game))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Game $game)
    {
        abort_if(Gate::denies('game_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $game->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
