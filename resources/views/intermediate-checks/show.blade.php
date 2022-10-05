<table id="intermediatecheckTable" class="table table-bordered" >
    <thead class="bg-primary bg-opacity-75 text-white">
    <tr>
        <th class="text-center px-2 py-3" scope="col">Date</th>
        <th class="text-center px-2 py-3" scope="col">Measurement</th>
        <th class="text-center px-2 py-3" scope="col">Expanded Uncertainty</th>
        <th class="text-center px-2 py-3" scope="col">Max Mpe</th>
    </tr>
    </thead>
    <tbody>
    @foreach($device->intermediate as $key => $intermediate)
        <tr>
            <td><input class="form-control" name="date[]" value="{{ $intermediate->date }}" readonly/></td>
            <td><input class="form-control" name="measurement[]" value="{{ $intermediate->measurement }}" readonly/></td>
            <td><input class="form-control" name="expanded_uncertainty[]" value="{{ $intermediate->expanded_uncertainty }}" readonly/></td>
            <td><input class="form-control" name="max_mpe[]" value="{{ $intermediate->max_mpe }}" readonly/></td>
        </tr>
    @endforeach
    </tbody>
</table>
