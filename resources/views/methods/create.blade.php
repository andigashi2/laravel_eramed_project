    @auth
    @extends('layouts.app-master')
    @section('content')
        <div class="container w-50">
            <form class="form_general" method="post" action="{{ route('methods.store') }}">
                @csrf
                @include('layouts.partials.eramed-logo')
                <h1 class="h3 mb-3 fw-normal">@lang('create_method')</h1>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="value" value="{{ old('value') }}" placeholder="value" required="required" autofocus>
                    <label for="floatingValue">@lang('value')</label>
                    @if ($errors->has('value'))
                        <span class="text-danger text-left">{{ $errors->first('value') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="number" class="form-control" name="unit" value="{{ old('unit') }}" placeholder=unit" required="required" autofocus>
                    <label for="floatingUnit">@lang('unit')</label>
                    @if ($errors->has('unit'))
                        <span class="text-danger text-left">{{ $errors->first('unit') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="max_difference" value="{{ old('max_difference') }}" placeholder="max_difference" required="required" autofocus>
                    <label for="floatingMaxDifference">@lang('max_difference')</label>
                    @if ($errors->has('max_difference'))
                        <span class="text-danger text-left">{{ $errors->first('max_difference') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="axial_uni_uncertified" value="{{ old('axial_uni_uncertified') }}" placeholder="axial_uni_uncertified" required="required" autofocus>
                    <label for="floatingAxialUniUncertified">@lang('axial_uni_uncertified')</label>
                    @if ($errors->has('axial_uni_uncertified'))
                        <span class="text-danger text-left">{{ $errors->first('axial_uni_uncertified') }}</span>
                    @endif
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Krijo</button>
            </form>
        </div>
    @endsection
@endauth
