<?php

namespace App\Http\Controllers;

use App\Http\Requests\IntermediateCheckRequest;
use App\Models\IntermediateCheck;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class IntermediateCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $intermediateChecks = IntermediateCheck::all();
        return view('intermediate-checks/index', compact('intermediateChecks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create():Renderable
    {
        return view('intermediate-checks/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  IntermediateCheckRequest  $request
     * @return RedirectResponse
     */
    public function store(IntermediateCheckRequest $request): RedirectResponse
    {
        IntermediateCheck::create($request->validated());
        return redirect('/intermediate-checks')->with('success', "IntermediateCheck successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  IntermediateCheck $intermediateCheck
     * @return Renderable
     */
    public function show(IntermediateCheck $intermediateCheck): Renderable
    {
        return view('intermediate-checks/show', compact('intermediateCheck'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  IntermediateCheck $intermediateCheck
     * @return Renderable
     */
    public function edit(IntermediateCheck $intermediateCheck): Renderable
    {
        return view('intermediate-checks/edit', compact('intermediateCheck'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  IntermediateCheckRequest $request
     * @param  IntermediateCheck $intermediateCheck
     * @return RedirectResponse
     */
    public function update(IntermediateCheckRequest $request, IntermediateCheck $intermediateCheck): RedirectResponse
    {
        $intermediateCheck->update($request->validated());
        return redirect("/intermediate-checks")->with('success', "Intermediate check successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  IntermediateCheck $intermediateCheck
     * @return RedirectResponse
     */
    public function destroy(IntermediateCheck $intermediateCheck): RedirectResponse
    {
        $intermediateCheck->delete();
        return redirect('/intermediate-checks')->with('success', "Intermediate check successfully deleted.");
    }
}
