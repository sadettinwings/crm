<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyVillaOwnerRequest;
use App\Http\Requests\StoreVillaOwnerRequest;
use App\Http\Requests\UpdateVillaOwnerRequest;
use App\Models\VillaOwner;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VillaOwnersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('villa_owner_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $villaOwners = VillaOwner::all();

        return view('admin.villaOwners.index', compact('villaOwners'));
    }

    public function create()
    {
        abort_if(Gate::denies('villa_owner_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.villaOwners.create');
    }

    public function store(StoreVillaOwnerRequest $request)
    {
        $villaOwner = VillaOwner::create($request->all());

        return redirect()->route('admin.villa-owners.index');
    }

    public function edit(VillaOwner $villaOwner)
    {
        abort_if(Gate::denies('villa_owner_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.villaOwners.edit', compact('villaOwner'));
    }

    public function update(UpdateVillaOwnerRequest $request, VillaOwner $villaOwner)
    {
        $villaOwner->update($request->all());

        return redirect()->route('admin.villa-owners.index');
    }

    public function show(VillaOwner $villaOwner)
    {
        abort_if(Gate::denies('villa_owner_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.villaOwners.show', compact('villaOwner'));
    }

    public function destroy(VillaOwner $villaOwner)
    {
        abort_if(Gate::denies('villa_owner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $villaOwner->delete();

        return back();
    }

    public function massDestroy(MassDestroyVillaOwnerRequest $request)
    {
        VillaOwner::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
