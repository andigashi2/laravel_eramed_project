<table id="calibrationTable" class="table table-bordered" >
    <thead class="bg-primary bg-opacity-75 text-white">
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Calibration Date</th>
            <th scope="col">Nr. of certificate of calibration</th>
            <th scope="col">Calibration lab</th>
            <th scope="col">Due date for next Calibration</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>
                <input class="form-control" type="date" name="cal_date[]"/>
            </td>
            <td>
                <input class="form-control" type="text" name="nr_cert_cal[]" />
            </td>
            <td>
                <input class="form-control" type="text" name="cal_lab[]" />
            </td>
            <td>
                <input class="form-control" type="date" name="cal_due_date[]" />
            </td>
        </tr>
    </tbody>
</table>
<div class="d-flex justify-content-end mb-4 p-0">
    <button id="addCalibration" class="btn btn-primary" type="button">
        ADD
    </button>
</div>

