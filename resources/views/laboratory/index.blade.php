@auth
    @extends('layouts.app-master')
    @section('content')
        <div class="container p-2">
            <div class="d-flex justify-content-between align-items-center mb-4 mt-2">
                <h2 class="my-4">Te gjitha pajisjet</h2>
                <button class="btn btn-primary">
                    <a href="{{ route('laboratories.create') }}" class="nav-link px-2 text-white">Krijo te re</a></li>
                </button>
            </div>
            <table class="table table-striped table-bordered w-75 m-auto">
                <thead>
                    <tr>
                        <td>@lang('laboratory_name')</td>
                        <td>Veprimet</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($laboratories as $key => $value)
                    <tr>
                        <td>{{ $value->name }}</td>

                        <td class="align-middle">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-small btn-warning mx-2 px-2 py-1" href="{{ route('laboratories.edit', $value->id) }}"><i class="bi bi-pencil-square"></i></a>
                                <button type="button" class="btn btn-danger px-2 py-1" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $value->id }}">
                                    <i class="bi bi-trash"></i>
                                </button>

                                <div class="modal fade" id="modal-delete-{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="device-modal" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="device-modal">{{ $value->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                @lang('are_you_sure_you_want_to_delete')  {{ $value->name }}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <form method="post" action="{{ route('laboratories.destroy', $value->id ) }}">
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
        </div>
    @endsection
@endauth
