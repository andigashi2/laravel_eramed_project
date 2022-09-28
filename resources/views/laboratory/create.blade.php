@auth
    @extends('layouts.app-master')
    @section('content')
        <div class="container justify-content-center">
            <form class="row form_general w-75 m-auto" method="post" action="{{ route('laboratories.store') }}">
                @csrf
                @include('layouts.partials.eramed-logo')
                <h1 class="h3 mb-4 fw-normal">@lang('create_device')</h1>

                <div class="d-flex justify-content-start mb-4">
                    <div class="col-6 form-outline mx-1">
                        <input id="measurementLimits" class="form-control form-control-lg" name="name" value="{{ old('name') }}" type="text" required="required" autofocus>
                        <label class="form-label" for="measurementLimits">@lang('laboratory_name')</label>
                        @if ($errors->has('name'))
                            <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="p-0 mx-4">
                        <button class="btn btn-lg btn-primary" type="submit">Krijo</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
@endauth
