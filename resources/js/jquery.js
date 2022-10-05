import $ from 'jquery/dist/jquery.min';
window.$ = window.jQuery = $;

$(document).ready(function() {

    $("#add-calibration").click(function() {
        let calDate = '<td><input class="form-control" type="date" name="cal_date[]" required /></td>';
        let nrCertCal = '<td><input class="form-control" type="text" name="nr_cert_cal[]" required /></td>';
        let calLab = '<td><input class="form-control" type="text" name="cal_lab[]" required /></td>';
        let calDueDate = '<td><input class="form-control" type="date" name="cal_due_date[]" required /></td>';
        let action =
            '<td>' +
                '<button class="calibration-row-delete btn btn-danger px-2 py-1" type="button">' +
                    '<i class="bi bi-trash-fill text-white"></i>' +
                '</button>' +
            '</td>';

        $('#calibration-table').find('tbody').append('<tr>' + calDate + nrCertCal + calLab + calDueDate + action +'</tr>');
    });

    $("#add-intermediate-check").click(function() {
        let date = '<td><input class="form-control" type="date" name="date[]" required /></td>';
        let measurement = '<td><input class="form-control" type="text" name="measurement[]" required /></td>';
        let expandedUncertainty = '<td><input class="form-control" type="text" name="expanded_uncertainty[]" required /></td>';
        let maxMpe = '<td><input class="form-control" type="text" name="max_mpe[]" required /></td>';
        let action =
            '<td>' +
                '<button class="intermediate-check-row-delete btn btn-danger px-2 py-1" type="button">' +
                    '<i class="bi bi-trash-fill text-white"></i>' +
                '</button>' +
            '</td>';

        $('#intermediate-check-table').find('tbody').append('<tr>' + date + measurement + expandedUncertainty + maxMpe + action +'</tr>');
    });

    $("#calibration-table, #intermediate-check-table").on('click', '.common-row-delete', function (event){
        event.stopPropagation();
        $(this).parent().parent().remove();
    });
});

// let calRowNo = '<th scope="row">'+i+'</th>';
// $('#calibrationTable').find('tbody').append('<tr>' + calRowNo + calDate + nrCertCal + calLab + calDueDate +'</tr>');
