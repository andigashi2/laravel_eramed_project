<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\App;

class RegisterController extends Controller
{
    /**
     * Display register page.
     *
     * @return Renderable
     */
    public function show(): Renderable
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     *
     * @param RegisterRequest $request
     *
     */
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        auth()->login($user);
        return redirect('/')->with('success', "Account successfully registered.");
    }
}
