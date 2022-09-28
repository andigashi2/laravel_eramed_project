@auth
    @extends('layouts.app-master')
    @section('content')
        <div class="container p-2">
            <div class="d-flex justify-content-between align-items-end mb-4 mt-2">
                <div class="div">
                    <h3 class="my-3">Te gjitha pajisjet</h3>
                    <form method="get" action="{{ route('calibrations.index') }}">
                        <div class="">
                            <label class="align-self-center mr-1 mb-2"><span class="fw-bold">@lang('calibration'):</span></label>
                            <select id="typeLaboratory" name="laboratory_id" class="form-control" onchange="this.form.submit();">
                                @foreach($calibrations as $key => $value)
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
                    <a href="{{ route('calibrations.create') }}" class="nav-link px-2 text-white">Krijo te re</a></li>
                </button>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <td>@lang('cal_date')</td>
                    <td>@lang('nr_cert_cal')</td>
                    <td>@lang('cal_lab')</td>
                    <td>@lang('cal_due_date')</td>
                    <td>@lang('cal_interval')</td>
                </tr>
                </thead>
                <tbody>
                @foreach($calibrations as $key => $value)
                    <tr>
                        <td>{{ $value->cal_date }}</td>
                        <td>{{ $value->nr_cert_cal }}</td>
                        <td>{{ $value->cal_lab }}</td>
                        <td>{{ $value->cal_due_date }}</td>
                        <td>{{ $value->cal_interval }}</td>
{{--                        <td>Statusi mirret ma vone</td>--}}
{{--                        <td>{{ $value->person_in_charge }}</td>--}}
{{--                        <td>Calibration intervali ma vone</td>--}}

                        <td class="align-middle">
                            <div class="d-flex">
                                <a class="btn btn-small btn-info px-2 py-1" href="{{ route('$calibrations.show', $value->id) }}"><i class="bi bi-tv"></i></a>
                                <a class="btn btn-small btn-warning mx-2 px-2 py-1" href="{{ route('$calibrations.edit', $value->id) }}"><i class="bi bi-pencil-square"></i></a>
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
                                                <form method="post" action="{{ route('$calibrations.destroy', $value->id ) }}">
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
