@auth
    @extends('layouts.app-master')
    @section('content')
        <div class="container justify-content-center">
            <form class="row form_general w-75 m-auto" method="POST" action="{{ route('devices.update', $device->id ) }}">
                @csrf
                @method('PUT')
                @include('layouts.partials.eramed-logo')

                <h2 class="h3 mb-4 fw-normal px-1">Duke edituar pajisjen: <span class="fw-bold">{{ $device->type_of_device }}</span></h2>

                <div class="d-flex justify-content-start mb-4 px-0">
                    <div class="col-6 mx-1">
                        <label class="align-self-center mr-1 mb-2"><span class="fw-bold">@lang('laboratory'):</span></label>
                        <select id="typeLaboratory" name="laboratory_id" class="form-control">
                            @foreach($laboratories as $key => $value)
                                <option value="{{ $value->id }}" {{ ($device->laboratory_id == $value->id) ? 'selected' : '' }}>
                                    {{ $value->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-around mb-4">
                    <div class="col-4 form-outline mx-1">
                        <input id="manufacturer" class="form-control form-control-lg" name="manufacturer" value="{{ $device->manufacturer }}" type="text" required="required" autofocus>
                        <label class="form-label" for="manufacturer">@lang('manufacturer')</label>
                        @if ($errors->has('manufacturer'))
                            <span class="text-danger text-left">{{ $errors->first('manufacturer') }}</span>
                        @endif
                    </div>

                    <div class="col-4 form-outline mx-1">
                        <input id="typeOfDevice" class="form-control form-control-lg" name="type_of_device" value="{{ $device->type_of_device }}" type="text" required="required" autofocus>
                        <label class="form-label" for="typeOfDevice">@lang('type_of_device')</label>
                        @if ($errors->has('type_of_device'))
                            <span class="text-danger text-left">{{ $errors->first('type_of_device') }}</span>
                        @endif
                    </div>

                    <div class="col-4 form-outline mx-1">
                        <input id="measurementLimits" class="form-control form-control-lg" name="measurement_limits" value="{{ $device->measurement_limits }}" type="text" required="required" autofocus>
                        <label class="form-label" for="measurementLimits">@lang('measurement_limits')</label>
                        @if ($errors->has('measurement_limits'))
                            <span class="text-danger text-left">{{ $errors->first('measurement_limits') }}</span>
                        @endif
                    </div>
                </div>

                <div class="d-flex justify-content-around mb-4">
                    <div class="col-4 form-outline mx-1">
                        <input id="serialNumber" class="form-control form-control-lg" name="serial_number" value="{{ $device->serial_number }}" type="text" required="required" autofocus>
                        <label class="form-label" for="serialNumber">@lang('serial_number')</label>
                        @if ($errors->has('serial_number'))
                            <span class="text-danger text-left">{{ $errors->first('serial_number') }}</span>
                        @endif
                    </div>

                    <div class="col-4 form-outline mx-1">
                        <input id="currentLocation" class="form-control form-control-lg" name="current_location" value="{{ $device->current_location }}" type="text" required="required" autofocus>
                        <label class="form-label" for="currentLocation">@lang('current_location')</label>
                        @if ($errors->has('current_location'))
                            <span class="text-danger text-left">{{ $errors->first('current_location') }}</span>
                        @endif
                    </div>

                    <div class="col-4 form-outline mx-1">
                        <input id="personInCharge" class="form-control form-control-lg" name="person_in_charge" value="{{ $device->person_in_charge }}" type="text" required="required" autofocus>
                        <label class="form-label" for="personInCharge">@lang('person_in_charge')</label>
                        @if ($errors->has('person_in_charge'))
                            <span class="text-danger text-left">{{ $errors->first('person_in_charge') }}</span>
                        @endif
                    </div>
                </div>

                <div class="d-flex justify-content-between mb-4 p-0">
                    <div class="col-6 form-outline inputs-two-cols">
                        <textarea id="instrumentDesc" class="form-control" name="instrument_description" rows="5" required="required" autofocus>{{ $device->instrument_description }}</textarea>
                        <label class="form-label" for="instrumentDesc">@lang('instrument_description')</label>
                        @if ($errors->has('instrument_description'))
                            <span class="text-danger text-left">{{ $errors->first('instrument_description') }}</span>
                        @endif
                    </div>

                    <div class="col-6 form-outline inputs-two-cols">
                        <textarea id="manufacturerDetails" class="form-control" name="manufacturer_details" rows="5" required="required" autofocus>{{ $device->manufacturer_details }}</textarea>
                        <label class="form-label" for="manufacturerDetails">@lang('manufacturer_details')</label>
                        @if ($errors->has('manufacturer_details'))
                            <span class="text-danger text-left">{{ $errors->first('manufacturer_details') }}</span>
                        @endif
                    </div>
                </div>

                <div class="d-flex justify-content-between mb-4 p-0">
                    <div class="col-6 form-outline inputs-two-cols">
                        <textarea id="manufacturerInstructions" class="form-control" name="manufacturer_instructions" rows="5" required="required" autofocus>{{ $device->manufacturer_instructions }}</textarea>
                        <label class="form-label" for="manufacturerInstructions">@lang('manufacturer_instructions')</label>
                        @if ($errors->has('manufacturer_instructions'))
                            <span class="text-danger text-left">{{ $errors->first('manufacturer_instructions') }}</span>
                        @endif
                    </div>

                    <div class="col-6 form-outline inputs-two-cols">
                        <textarea id="manufacturerPlan" class="form-control" name="maintenance_plan" rows="5" required="required" autofocus>{{ $device->maintenance_plan }}</textarea>
                        <label class="form-label" for="manufacturerPlan">@lang('maintenance_plan')</label>
                        @if ($errors->has('maintenance_plan'))
                            <span class="text-danger text-left">{{ $errors->first('maintenance_plan') }}</span>
                        @endif
                    </div>
                </div>

                <div class="d-flex justify-content-between mb-4 p-0">
                    <div class="col-6 form-outline inputs-two-cols">
                        <input id="equipmentStatus" class="form-control form-control-lg" name="equipment_status" value="{{ $device->equipment_status }}" type="text" required="required" autofocus>
                        <label class="form-label" for="equipmentStatus">@lang('equipment_status')</label>
                        @if ($errors->has('equipment_status'))
                            <span class="text-danger text-left">{{ $errors->first('equipment_status') }}</span>
                        @endif
                    </div>

                    <div class="col-6 form-outline inputs-two-cols">
                        <input id="eramedLabIc" class="form-control form-control-lg" name="eramed_laboratory_identification_code" value="{{ $device->eramed_laboratory_identification_code }}" type="text" required="required" autofocus>
                        <label class="form-label" for="eramedLabIc">@lang('eramed_laboratory_identification_code')</label>
                        @if ($errors->has('eramed_laboratory_identification_code'))
                            <span class="text-danger text-left">{{ $errors->first('eramed_laboratory_identification_code') }}</span>
                        @endif
                    </div>
                </div>
                @include('calibrations.edit')
                <div class="row justify-content-end p-0 m-0">
                    <button class="col-2 btn btn-lg btn-warning" type="submit">Edito</button>
                </div>
            </form>
        </div>
    @endsection
@endauth
