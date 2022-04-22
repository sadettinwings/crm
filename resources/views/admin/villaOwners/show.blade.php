@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.villaOwner.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.villa-owners.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.villaOwner.fields.id') }}
                        </th>
                        <td>
                            {{ $villaOwner->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.villaOwner.fields.name') }}
                        </th>
                        <td>
                            {{ $villaOwner->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.villaOwner.fields.email') }}
                        </th>
                        <td>
                            {{ $villaOwner->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.villaOwner.fields.phone') }}
                        </th>
                        <td>
                            {{ $villaOwner->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.villaOwner.fields.bank_account_info') }}
                        </th>
                        <td>
                            {{ $villaOwner->bank_account_info }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.villaOwner.fields.payment_type') }}
                        </th>
                        <td>
                            {{ $villaOwner->payment_type }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.villa-owners.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection