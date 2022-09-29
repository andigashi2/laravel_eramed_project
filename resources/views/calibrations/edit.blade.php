<table id="calibrationTable" class="table table-bordered" >
    <thead class="bg-primary bg-opacity-75 text-white">
        <tr>
            <th class="text-center px-2 py-3" scope="col">Calibration Date</th>
            <th class="text-center px-2 py-3" scope="col">Nr. of certificate of calibration</th>
            <th class="text-center px-2 py-3" scope="col">Calibration lab</th>
            <th class="text-center px-2 py-3" scope="col">Due date for next Calibration</th>
            <th class="text-center px-2 py-3">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($device->calibrations as $key => $calibration)
            <tr>
                <td><input class="form-control" type="date" name="cal_date[]" value="{{$calibration->cal_date}}" required /></td>
                <td><input class="form-control" type="text" name="nr_cert_cal[]" value="{{$calibration->nr_cert_cal}}" required /></td>
                <td><input class="form-control" type="text" name="cal_lab[]" value="{{$calibration->cal_lab}}" required /></td>
                <td><input class="form-control" type="date" name="cal_due_date[]" value="{{$calibration->cal_due_date}}" required /></td>
                <td>
                    <button class="calibration-row-delete btn btn-danger px-2 py-1" type="button">
                        <i class="bi bi-trash-fill text-white"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end mb-4 p-0">
    <button id="addCalibration" class="btn btn-primary" type="button">ADD</button>
</div>

