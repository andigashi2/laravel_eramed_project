<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaboratoryRequest;
use Illuminate\Contracts\Support\Renderable;
use App\Models\Laboratory;
use  Illuminate\Http\RedirectResponse;

class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
     public function index() : Renderable
     {
         $laboratories = Laboratory::all();
         return view('laboratory/index', compact('laboratories'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('laboratory/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LaboratoryRequest $request
     * @return RedirectResponse
     */
     public function store(LaboratoryRequest $request) : RedirectResponse
     {
          Laboratory::create($request->validated());
          return redirect('/laboratories')->with('success', 'Laboratory successfully created');
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Laboratory $laboratory
     * @return Renderable
     */
    public function edit (Laboratory $laboratory): Renderable
    {
        return view('laboratory/edit', compact('laboratory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param LaboratoryRequest $request
     * @param Laboratory $laboratory
     * @return RedirectResponse
     */
    public function update(LaboratoryRequest $request, Laboratory $laboratory): RedirectResponse
    {
        $laboratory->update($request->validated());
        return redirect('/laboratories')->with('success', "Laboratory successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Laboratory $laboratory
     * @return RedirectResponse
     */
    public function destroy(Laboratory $laboratory): RedirectResponse
    {
        $laboratory->delete();
        return redirect('/laboratories')->with('success', "Laboratory successfully deleted.");
    }
}
