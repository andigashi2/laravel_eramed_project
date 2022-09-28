@auth
    @extends('layouts.app-master')
    @section('content')
        <div class="container p-2">
            <div class="d-flex justify-content-between align-items-center mb-4 mt-2">
                <h2 class="my-4">Te gjitha pajisjet</h2>
                <button class="btn btn-primary">
                    <a href="{{ route('methods.create') }}" class="nav-link px-2 text-white">@lang('create_new')</a></li>
                </button>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>@lang('value')</td>
                        <td>@lang('unit')</td>
                        <td>@lang('max_difference')</td>
                        <td>@lang('axial_uni_uncertified')</td>
                        <td>@lang('actions')</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($methods as $key => $object)
                    <tr>
                        <td>{{ $object->value }}</td>
                        <td>{{ $object->unit }}</td>
                        <td>{{ $object->max_difference }}</td>
                        <td>{{ $object->axial_uni_uncertified }}</td>

                        <td class="text-center">
                            <a class="btn btn-small btn-warning" href="{{ route('methods.edit', $object->id) }}"><i class="bi bi-pencil-square"></i></a>
{{--                            <a class="btn btn-small btn-danger" href="{{ route('devices.destroy', $value->id) }}"><i class="bi bi-trash"></i></a>--}}
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $object->id }}">
                                <i class="bi bi-trash"></i>
                            </button>
                            <div class="modal fade" id="modal-delete-{{ $object->id }}" tabindex="-1" role="dialog" aria-labelledby="device-modal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="device-modal">{{ $object->value }}</h5>
                                            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="bi bi-x"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-start">
                                            @lang('Are you sure you want to delete') {{ $object->value }}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form class="form_general" method="post" action="{{ route('methods.destroy', $object->id ) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endsection
@endauth
