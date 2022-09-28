@auth
    @extends('layouts.app-master')
    @section('content')
        <div class="container w-50">
            <form class="form_general" method="POST" action="{{ route('methods.update', $method->id ) }} }}">
                @csrf
                @method('PUT')
                @include('layouts.partials.eramed-logo')
                <h2 class="h3 mb-3 fw-normal">Duke edituar: <span class="fw-bold">{{ $method->method }}</span></h2>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="method" value="{{ $method->value }}" placeholder="Value" required="required" autofocus>
                    <label for="floatingName">@lang('value')</label>
                    @if ($errors->has('value'))
                        <span class="text-danger text-left">{{ $errors->first('value') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="number" class="form-control" name="sub_number" value="{{ $method->unit }}" placeholder="Unit" required="required" autofocus>
                    <label for="floatingNumber">@lang('unit')</label>
                    @if ($errors->has('unit'))
                        <span class="text-danger text-left">{{ $errors->first('unit') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="quantity" value="{{ $method->max_difference }}" placeholder="Max Difference" required="required" autofocus>
                    <label for="floatingName">@lang('max_difference')</label>
                    @if ($errors->has('max_difference'))
                        <span class="text-danger text-left">{{ $errors->first('max_difference') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="manufacturer" value="{{ $method->axial_uni_uncertified }}" placeholder="Axile Ucertified" required="required" autofocus>
                    <label for="floatingName">@lang('axial_uni_uncertified')</label>
                    @if ($errors->has('axial_uni_uncertified'))
                        <span class="text-danger text-left">{{ $errors->first('axial_uni_uncertified') }}</span>
                    @endif
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Edito</button>
            </form>
        </div>
    @endsection
@endauth
