@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.villaOwner.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.villa-owners.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.villaOwner.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.villaOwner.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.villaOwner.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.villaOwner.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.villaOwner.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.villaOwner.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="bank_account_info">{{ trans('cruds.villaOwner.fields.bank_account_info') }}</label>
                <input class="form-control {{ $errors->has('bank_account_info') ? 'is-invalid' : '' }}" type="text" name="bank_account_info" id="bank_account_info" value="{{ old('bank_account_info', '') }}">
                @if($errors->has('bank_account_info'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bank_account_info') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.villaOwner.fields.bank_account_info_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_type">{{ trans('cruds.villaOwner.fields.payment_type') }}</label>
                <input class="form-control {{ $errors->has('payment_type') ? 'is-invalid' : '' }}" type="text" name="payment_type" id="payment_type" value="{{ old('payment_type', '') }}">
                @if($errors->has('payment_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payment_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.villaOwner.fields.payment_type_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection