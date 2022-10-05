<table id="calibration-table" class="table table-bordered" >
    <thead class="bg-primary bg-opacity-75 text-white">
    <tr>
        <th class="text-center px-2 py-3" scope="col">Calibration Date</th>
        <th class="text-center px-2 py-3" scope="col">Nr. of certificate of calibration</th>
        <th class="text-center px-2 py-3" scope="col">Calibration lab</th>
        <th class="text-center px-2 py-3" scope="col">Due date for next Calibration</th>
    </tr>
    </thead>
    <tbody>
    @foreach($device->calibrations as $key => $calibration)
        <tr>
            <td><input class="form-control" name="cal_date[]" value="{{$calibration->cal_date}}" readonly/></td>
            <td><input class="form-control" name="nr_cert_cal[]" value="{{$calibration->nr_cert_cal}}" readonly/></td>
            <td><input class="form-control" name="cal_lab[]" value="{{$calibration->cal_lab}}" readonly/></td>
            <td><input class="form-control" name="cal_due_date[]" value="{{$calibration->cal_due_date}}" readonly/></td>
        </tr>
    @endforeach
    </tbody>
</table>
