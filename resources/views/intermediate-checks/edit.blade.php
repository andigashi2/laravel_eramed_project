<table id="intermediate-check-table" class="table table-bordered" >
    <thead class="bg-primary bg-opacity-75 text-white">
        <tr>
            <th class="text-center px-2 py-3" scope="col">Date</th>
            <th class="text-center px-2 py-3" scope="col">Measurement</th>
            <th class="text-center px-2 py-3" scope="col">Expanded Uncertainty</th>
            <th class="text-center px-2 py-3" scope="col">Max Mpe</th>
            <th class="text-center px-2 py-3">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($device->intermediates as $key => $intermediate)
            <tr>
                <td><input class="form-control" type="date" name="date[]" value="{{$intermediate->date}}" required /></td>
                <td><input class="form-control" type="text" name="measurement[]" value="{{$intermediate->measurement}}" required /></td>
                <td><input class="form-control" type="text" name="expanded_uncertainty[]" value="{{$intermediate->expanded_uncertainty}}" required /></td>
                <td><input class="form-control" type="text" name="max_mpe[]" value="{{$intermediate->max_mpe}}" required /></td>
                <td>
                    <button class="common-row-delete btn btn-danger px-2 py-1" type="button">
                        <i class="bi bi-trash-fill text-white"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end mb-4 p-0">
    <button id="add-intermediate-check" class="btn btn-primary" type="button">ADD</button>
</div>

