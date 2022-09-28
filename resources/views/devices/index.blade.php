@auth
    @extends('layouts.app-master')
    @section('content')
        <div class="container p-2">
            <div class="d-flex justify-content-between align-items-end mb-4 mt-2">
                <div class="div">
                    <h3 class="my-3">Te gjitha pajisjet</h3>
                    <form method="get" action="{{ route('devices.index') }}">
                        <div class="">
                            <label class="align-self-center mr-1 mb-2"><span class="fw-bold">@lang('laboratory'):</span></label>
                            <select id="typeLaboratory" name="laboratory_id" class="form-control" onchange="this.form.submit();">
                                @foreach($laboratories as $key => $value)
                                    <option value="{{ $value->id }}"
                                        {{ ((int)$request->laboratory_id == $value->id) ? 'selected' : '' }}>
                                        {{ $value->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
                <button class="btn btn-primary">
                    <a href="{{ route('devices.create') }}" class="nav-link px-2 text-white">Krijo te re</a></li>
                </button>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>@lang('device')</td>
                        <td>@lang('measurement_limits')</td>
                        <td>@lang('manufacturer')</td>
                        <td>@lang('serial_number')</td>
                        <td>@lang('last_calculated_certificate')</td>
                        <td>@lang('location')</td>
                        <td>@lang('person_in_charge')</td>
                        <td>@lang('calibration_interval')</td>
                        <td>@lang('actions')</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($devices as $key => $value)
                        <tr>
                            <td>{{ $value->type_of_device }}</td>
                            <td>{{ $value->measurement_limits }}</td>
                            <td>{{ $value->manufacturer }}</td>
                            <td>{{ $value->serial_number }}</td>
                            <td>Statusi mirret ma vone</td>
                            <td>{{ $value->current_location }}</td>
                            <td>{{ $value->person_in_charge }}</td>
                            <td>Calibration intervali ma vone</td>

                            <td class="align-middle">
                                <div class="d-flex">
                                    <a class="btn btn-small btn-info px-2 py-1" href="{{ route('devices.show', $value->id) }}"><i class="bi bi-tv"></i></a>
                                    <a class="btn btn-small btn-warning mx-2 px-2 py-1" href="{{ route('devices.edit', $value->id) }}"><i class="bi bi-pencil-square"></i></a>
                                    <button type="button" class="btn btn-danger px-2 py-1" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $value->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                    <div id="modal-delete-{{ $value->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="device-modal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 id="device-modal" class="modal-title">@lang('device'): {{ $value->type_of_device }}</h5>
                                                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    @lang('are_you_sure_you_want_to_delete') {{ $value->type_of_device }}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <form method="post" action="{{ route('devices.destroy', $value->id ) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-4">
                {{ $devices->withQueryString()->links() }}
            </div>
        </div>
    @endsection
@endauth
