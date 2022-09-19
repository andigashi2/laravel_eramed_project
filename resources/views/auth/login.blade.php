@extends('layouts.auth-master')

@section('content')
    <form class="form_general" method="post" action="{{ route('login.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/eramed.jpg') !!}" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">@lang('log_in')</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="email" value="{{ old('name') }}" placeholder="Emri" required="required" autofocus>
            <label for="floatingName">@lang('email_or_username')</label>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Passi" required="required">
            <label for="floatingPassword">@lang('password')</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">@lang('log_in')</button>

        @include('layouts.partials.copy')
    </form>
@endsection
