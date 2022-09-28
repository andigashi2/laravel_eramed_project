@auth
    @extends('layouts.app-master')
    @section('content')
        <div class="container justify-content-center">
            <form class="row form_general w-75 m-auto" method="POST" action="{{ route('calibrations.update', $calibration->id ) }} }}">
                @csrf
                @method('PUT')
                @include('layouts.partials.eramed-logo')

                <h2 class="h3 mb-4 fw-normal px-1">Pajisja: <span class="fw-bold">{{ $calibration->type_of_calibration }}</span></h2>

                <div class="d-flex justify-content-start mb-4 px-0">
                    <div class="col-6 mx-1 disabled">
                        <input class="form-control form-control-lg" value="{{$calibration->calibration->name }}" readonly>
                    </div>
                </div>

                <div class="d-flex justify-content-around mb-4">
                    <div class="col-4 form-outline mx-1">
                        <input id="typeOfDevice" class="form-control form-control-lg" value="{{ $calibration->type_of_calibration }}" readonly>
                        <label class="form-label" for="typeOfDevice">@lang('cal_date')</label>
                    </div>

                    <div class="col-4 form-outline mx-1">
                        <input id="measurementLimits" class="form-control form-control-lg" value="{{ $calibration->measurement_limits }}" readonly>
                        <label class="form-label" for="measurementLimits">@lang('nr_cert_cal')</label>
                    </div>

                    <div class="col-4 form-outline mx-1">
                        <input id="manufacturer" class="form-control form-control-lg" value="{{ $calibration->manufacturer }}" readonly>
                        <label class="form-label" for="manufacturer">@lang('cal_lab')</label>
                    </div>
                </div>

                <div class="d-flex justify-content-around mb-4">
                    <div class="col-4 form-outline mx-1">
                        <input id="serialNumber" class="form-control form-control-lg" value="{{ $calibration->serial_number }}" readonly>
                        <label class="form-label" for="serialNumber">@lang('cal_due_date')</label>
                    </div>

                    <div class="col-4 form-outline mx-1">
                        <input id="currentLocation" class="form-control form-control-lg" value="{{ $calibration->current_location }}" readonly>
                        <label class="form-label" for="currentLocation">@lang('cal_interval')</label>
                    </div>
                </div>
                </div>
            </form>
        </div>
    @endsection
@endauth
