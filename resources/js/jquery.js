import $ from 'jquery/dist/jquery.min';
window.$ = window.jQuery = $;

$(document).ready(function() {

    $("#addCalibration").click(function() {
        let calDate = '<td><input class="form-control" type="date" name="cal_date[]" /></td>';
        let nrCertCal = '<td><input class="form-control" type="text" name="nr_cert_cal[]" /></td>';
        let calLab = '<td><input class="form-control" type="text" name="cal_lab[]" /></td>';
        let calDueDate = '<td><input class="form-control" type="date" name="cal_due_date[]" /></td>';
        let action =
            '<td>' +
                '<button class="calibration-row-delete btn btn-danger px-2 py-1" type="button">' +
                    '<i class="bi bi-trash-fill text-white"></i>' +
                '</button>' +
            '</td>'
        $('#calibrationTable').find('tbody').append('<tr>' + calDate + nrCertCal + calLab + calDueDate + action +'</tr>');
    });

    $("#calibrationTable").on('click', '.calibration-row-delete', function (event){
        event.stopPropagation();
        $(this).parent().parent().remove();
    });
});

// let calRowNo = '<th scope="row">'+i+'</th>';
// $('#calibrationTable').find('tbody').append('<tr>' + calRowNo + calDate + nrCertCal + calLab + calDueDate +'</tr>');
