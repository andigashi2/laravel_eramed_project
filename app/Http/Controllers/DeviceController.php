<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeviceRequest;
use App\Models\Device;
use App\Models\Calibration;
use App\Models\Laboratory;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Support\Renderable;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     * We get the first laboratory, or if we sent another laboratory we get that id
     * Then we get all those devices that contain that laboratory_id
     *
     * @param Request $request
     * @return Renderable
     */
    public function index(Request $request): Renderable
    {
        $laboratories = Laboratory::all();
        $laboratory_id = isset($request->laboratory_id) ? (int)$request->laboratory_id : $laboratories->first()->id;
        $devices = Device::where('laboratory_id', $laboratory_id)->orderBy('updated_at', 'desc')->paginate(5);
        return view('devices/index', compact('devices', 'laboratories', 'request'));
    }

    /**
     * Display the specified resource.
     * We show here only one device, we get the device from the url
     *
     * @param  Device  $device
     * @return Renderable
     */
    public function show(Device $device): Renderable
    {
        return view('devices/show', compact('device'));
    }

    /**
     * Show the form for creating a new resource.
     * Get all the laboratories, so we can choose the laboratory when creating a device
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
     * Create device, and then we get the device that it was created its ID
     * We create the calibration array, which contains all the calibration data
     * Then we insert those calibration data to our device with the correct device id
     *
     * @param DeviceRequest $request
     * @return RedirectResponse
     */
    public function store(DeviceRequest $request) : RedirectResponse
    {
        $device = Device::create($request->validated());
        $calibrationsArray = $this->createCalibrationArray($request, $device->id);
        Calibration::upsert($calibrationsArray, 'device_id');
        return redirect('/devices')->with('success', "Device successfully created.");
    }

    /**
     * Show the form for editing the specified resource.
     * Edit simply returns the Device with its data
     * We also get all the Laboratories, so we don't need to do
     * another request when setting the selectors
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
     * First we create the new calibration array
     * We delete all the calibrations that were with the device->id
     * Then we create the new calibration data, and we update the device
     *
     * @param DeviceRequest $request
     * @param Device $device
     * @return RedirectResponse
     */
    public function update(DeviceRequest $request, Device $device): RedirectResponse
    {
        $calibrationsArray = $this->createCalibrationArray($request, $device->id);

        Calibration::where('device_id', $device->id)->delete();
        Calibration::upsert($calibrationsArray, 'device_id');

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

    private function createCalibrationArray($request, $deviceId): array
    {
        /** Create calibration array that contains all the new data we got from frontend */
        $calibrationArray = [];
        $calibrationLength = count($request->cal_date);
        for ($i = 0; $i < $calibrationLength; $i++) {
            $calibrationArray[] = [
                'cal_date' => $request->cal_date[$i],
                'nr_cert_cal' => $request->nr_cert_cal[$i],
                'cal_lab' => $request->cal_lab[$i],
                'cal_due_date' => $request->cal_due_date[$i],
                'cal_interval' => 'asdas',
                'device_id' =>  $deviceId
            ];
        }

        return $calibrationArray;
    }
}

