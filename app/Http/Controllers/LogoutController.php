<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse as Redirector;

class LogoutController extends Controller
{
    /**
     * Log out account user.
     *
     * @return Redirector
     */
    public function perform(): Redirector
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }
}
