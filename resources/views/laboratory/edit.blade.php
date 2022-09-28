@auth
    @extends('layouts.app-master')
    @section('content')
        <div class="container w-50">
            <form class="form_general" method="POST" action="{{ route('laboratories.update', $laboratory->id ) }} }}">
                @csrf
                @method('PUT')
                @include('layouts.partials.eramed-logo')

                <h2 class="h3 mb-3 fw-normal">Duke edituar: <span class="fw-bold">{{ $laboratory->name }}</span></h2>
                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="name" value="{{ $laboratory->name }}" placeholder="Laboratory Name" required="required" autofocus>
                    <label for="floatingName">Laboratory Name</label>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="row justify-content-end p-0 m-0">
                    <button class="col-2 btn btn-lg btn-primary" type="submit">Edito</button>
                </div>
            </form>
        </div>
    @endsection
@endauth
