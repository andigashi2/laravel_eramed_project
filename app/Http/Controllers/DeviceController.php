<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeviceRequest;
use App\Models\Laboratory;
use App\Models\Device;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index(Request $request): Renderable
    {
        $laboratory_id = isset($request->laboratory_id) ? (int)$request->laboratory_id : Laboratory::first()->id;
        $devices = Device::where('laboratory_id', $laboratory_id)->paginate(2);
        $laboratories = Laboratory::all();
        return view('devices/index', compact('devices', 'laboratories', 'request'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Device  $device
     * @return Renderable
     */
    public function show(Device $device)
    {
        return view('devices/show', compact('device'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create(): Renderable
    {
        $laboratories = Laboratory::all();
        return view('devices/create', compact('laboratories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DeviceRequest $request
     * @return RedirectResponse
     */
    public function store(DeviceRequest $request) : RedirectResponse
    {
        Device::create($request->validated());
        return redirect('/devices')->with('success', "Device successfully created.");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Device $device
     * @return Renderable
     */
    public function edit(Device $device): Renderable
    {
        $laboratories = Laboratory::all();
        return view('devices/edit', compact('device', 'laboratories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DeviceRequest $request
     * @param Device $device
     * @return RedirectResponse
     */
    public function update(DeviceRequest $request, Device $device): RedirectResponse
    {
        $device->update($request->validated());
        return redirect('/devices')->with('success', "Device successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Device $device
     * @return RedirectResponse
     */
    public function destroy(Device $device): RedirectResponse
    {
        $device->delete();
        return redirect('/devices')->with('success', "Device successfully deleted.");
    }
}

