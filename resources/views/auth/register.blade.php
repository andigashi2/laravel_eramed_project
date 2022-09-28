@extends('layouts.auth-master')
@auth
    @section('content')
        <form class="form_general" method="post" action="{{ route('register.perform') }}">

            @csrf
            <img class="mb-4" src="{!! url('images/eramed.jpg') !!}" alt="" width="250" height="150">

            <h1 class="h3 mb-3 fw-normal">@lang('register')</h1>

            <div class="form-group form-floating mb-3">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required="required" autofocus />
                <label for="floatingEmail">@lang('email')</label>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Emri" required="required" autofocus>
                <label for="floatingName">@lang('name')</label>
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

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                <label for="floatingConfirmPassword">@lang('confirm_password')</label>
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">@lang('register')</button>

            @include('layouts.partials.copy')
        </form>
    @endsection
@endauth

@guest
    @section('content')
        <h1 class="text-bg-secondary p-3 rounded-2 mt-4">You have no rights here!</h1>
    @endsection
@endguest

