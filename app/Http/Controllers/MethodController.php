<?php

namespace App\Http\Controllers;

use App\Http\Requests\MethodRequest;
use Illuminate\Contracts\Support\Renderable;
use App\Models\Method;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class MethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $methods = Method::all();
        return view('methods/index', compact('methods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create():Renderable
    {
        return view('methods/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MethodRequest  $request
     * @return RedirectResponse
     */
    public function store(MethodRequest $request): RedirectResponse
    {
        Method::create($request->validated());
        return redirect('/methods')->with('success', "Method successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  Method  $method
     * @return Renderable
     */
//    public function show(Method $method)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Method  $method
     * @return Renderable
     */
    public function edit(Method $method): Renderable
    {
        return view('methods/edit', compact('method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MethodRequest  $request
     * @param  Method  $method
     * @return RedirectResponse
     */
    public function update(MethodRequest $request, Method $method): RedirectResponse
    {
        $method->update($request->validated());
        return redirect('/methods')->with('success', "Method successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Method  $method
     * @return RedirectResponse
     */
    public function destroy(Method $method): RedirectResponse
    {
        $method->delete();
        return redirect('/methods')->with('success', "Method successfully deleted.");
    }
}
