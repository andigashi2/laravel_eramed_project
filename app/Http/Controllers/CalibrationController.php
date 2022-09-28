<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalibrationRequest;
use App\Models\Laboratory;
use App\Models\Calibration;
use App\Models\Method;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CalibrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Renderable
    {
        $calibrations = Calibration::all();
        return view('calibrations/index', compact('calibrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():Renderable
    {
        return view('calibrations/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CalibrationRequest  $request
     * @return RedirectResponse
     */
    public function store(CalibrationRequest $request): RedirectResponse
    {
        Calibration::create($request->validated());
        return redirect('/calibrations')->with('success', "Calibration successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  Calibration  $calibration
     * @return Renderable
     */
    public function show(calibration $calibration)
    {
        return view('calibrations/show', compact('calibration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Calibration  $calibration
     * @return Renderable
     */
    public function edit(calibration $calibration)
    {
        return view('calibrations/edit', compact('calibration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CalibrationRequest  $request
     * @param  Calibration  $calibration
     * @return RedirectResponse
     */
    public function update(Request $request, calibration $calibration)
    {
        $calibration->update($request->validated());
        return redirect('/calibrations')->with('success', "Calibration successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Calibration  $calibration
     * @return RedirectResponse
     */
    public function destroy(calibration $calibration)
    {
        $calibration->delete();
        return redirect('/calibrations')->with('success', "Calibration successfully deleted.");
    }
}
