@extends('layouts.auth-master')

@section('content')
    <form class="form_general" method="post" action="{{ route('login.perform') }}">
        @csrf
        @include('layouts.partials.eramed-logo')

        <h1 class="h3 mb-3 fw-normal">@lang('log_in')</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="email" value="{{ old('name') }}" placeholder="Email" required="required" autofocus>
            <label for="floatingName">@lang('email_or_username')</label>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">@lang('password')</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">@lang('log_in')</button>

        @include('layouts.partials.copy')
    </form>
@endsection
