<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVillaOwnerRequest;
use App\Http\Requests\UpdateVillaOwnerRequest;
use App\Http\Resources\Admin\VillaOwnerResource;
use App\Models\VillaOwner;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VillaOwnersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('villa_owner_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VillaOwnerResource(VillaOwner::all());
    }

    public function store(StoreVillaOwnerRequest $request)
    {
        $villaOwner = VillaOwner::create($request->all());

        return (new VillaOwnerResource($villaOwner))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(VillaOwner $villaOwner)
    {
        abort_if(Gate::denies('villa_owner_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VillaOwnerResource($villaOwner);
    }

    public function update(UpdateVillaOwnerRequest $request, VillaOwner $villaOwner)
    {
        $villaOwner->update($request->all());

        return (new VillaOwnerResource($villaOwner))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(VillaOwner $villaOwner)
    {
        abort_if(Gate::denies('villa_owner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $villaOwner->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
