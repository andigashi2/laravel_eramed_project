<header class="p-3 color-dark-blue text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a class="nav-link px-2 text-white" href="{{ route('devices.index') }}">@lang('equipment')</a></li>
                <li><a class="nav-link px-2 text-white" href="{{ route('laboratories.index') }}">@lang('laboratories')</a></li>
                <li><a class="nav-link px-2 text-white" href="{{ route('methods.index') }}">@lang('methods')</a></li>
                <li><a class="nav-link px-2 text-white" href="{{ url('test') }}">@lang('certificate_test')</a></li>
            </ul>

            @auth
                <p class="mb-0 mx-3">
                    @lang('hi'), <span class="fw-bold">{{auth()->user()->name}}</span>
                </p>
                <div class="text-end">
                    <a class="btn btn-warning" href="{{ route('register.perform') }}">@lang('sign_up')</a>
                    <a class="btn btn-outline-light me-2" href="{{ route('logout.perform') }}">@lang('logout')</a>
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a class="btn btn-outline-light me-2" href="{{ route('login.perform') }}">@lang('log_in')</a>
                </div>
            @endguest
        </div>
    </div>
</header>
