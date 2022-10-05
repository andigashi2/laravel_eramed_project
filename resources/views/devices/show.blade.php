@auth
    @extends('layouts.app-master')
    @section('content')
        <div class="container justify-content-center">
            <div class="row form_general w-75 m-auto">
                @csrf
                @include('layouts.partials.eramed-logo')

                <h2 class="h3 mb-4 fw-normal px-1">Pajisja: <span class="fw-bold">{{ $device->type_of_device }}</span></h2>

                <div class="d-flex justify-content-start mb-4 px-0">
                    <div class="col-6 mx-1 disabled">
                        <input class="form-control form-control-lg" value="{{$device->laboratory->name }}" readonly>
                    </div>
                </div>

                <div class="d-flex justify-content-around mb-4">
                    <div class="col-4 form-outline mx-1">
                        <input id="typeOfDevice" class="form-control form-control-lg" value="{{ $device->type_of_device }}" readonly>
                        <label class="form-label" for="typeOfDevice">@lang('type_of_device')</label>
                    </div>

                    <div class="col-4 form-outline mx-1">
                        <input id="measurementLimits" class="form-control form-control-lg" value="{{ $device->measurement_limits }}" readonly>
                        <label class="form-label" for="measurementLimits">@lang('measurement_limits')</label>
                    </div>

                    <div class="col-4 form-outline mx-1">
                        <input id="manufacturer" class="form-control form-control-lg" value="{{ $device->manufacturer }}" readonly>
                        <label class="form-label" for="manufacturer">@lang('manufacturer')</label>
                    </div>
                </div>

                <div class="d-flex justify-content-around mb-4">
                    <div class="col-4 form-outline mx-1">
                        <input id="serialNumber" class="form-control form-control-lg" value="{{ $device->serial_number }}" readonly>
                        <label class="form-label" for="serialNumber">@lang('serial_number')</label>
                    </div>

                    <div class="col-4 form-outline mx-1">
                        <input id="currentLocation" class="form-control form-control-lg" value="{{ $device->current_location }}" readonly>
                        <label class="form-label" for="currentLocation">@lang('current_location')</label>
                    </div>

                    <div class="col-4 form-outline mx-1">
                        <input id="personInCharge" class="form-control form-control-lg" value="{{ $device->person_in_charge }}" readonly>
                        <label class="form-label" for="personInCharge">@lang('person_in_charge')</label>
                    </div>
                </div>

                <div class="d-flex justify-content-between mb-4 p-0">
                    <div class="col-6 form-outline inputs-two-cols">
                        <textarea id="instrumentDesc" class="form-control" rows="5" readonly>{{ $device->instrument_description }}</textarea>
                        <label class="form-label" for="instrumentDesc">@lang('instrument_description')</label>
                    </div>

                    <div class="col-6 form-outline inputs-two-cols">
                        <textarea id="manufacturerDetails" class="form-control" rows="5" readonly>{{ $device->manufacturer_details }}</textarea>
                        <label class="form-label" for="manufacturerDetails">@lang('manufacturer_details')</label>
                    </div>
                </div>

                <div class="d-flex justify-content-between mb-4 p-0">
                    <div class="col-6 form-outline inputs-two-cols">
                        <textarea id="manufacturerInstructions" class="form-control" rows="5" readonly>{{ $device->manufacturer_instructions }}</textarea>
                        <label class="form-label" for="manufacturerInstructions">@lang('manufacturer_instructions')</label>
                    </div>

                    <div class="col-6 form-outline inputs-two-cols">
                        <textarea id="manufacturerPlan" class="form-control" rows="5" readonly>{{ $device->maintenance_plan }}</textarea>
                        <label class="form-label" for="manufacturerPlan">@lang('maintenance_plan')</label>
                    </div>
                </div>

                <div class="d-flex justify-content-between mb-4 p-0">
                    <div class="col-6 form-outline inputs-two-cols">
                        <input id="equipmentStatus" class="form-control form-control-lg" value="{{ $device->equipment_status }}" readonly>
                        <label class="form-label" for="equipmentStatus">@lang('equipment_status')</label>
                    </div>

                    <div class="col-6 form-outline inputs-two-cols">
                        <input id="eramedLabIc" class="form-control form-control-lg" value="{{ $device->eramed_laboratory_identification_code }}" readonly>
                        <label class="form-label" for="eramedLabIc">@lang('eramed_laboratory_identification_code')</label>
                    </div>
                </div>

                @include('calibrations.show')
                @include('intermediate-checks.show')
            </div>
        </div>
    @endsection
@endauth
