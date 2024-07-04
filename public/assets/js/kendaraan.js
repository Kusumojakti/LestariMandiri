$(document).ready(function () {
    // add data
    $('#addKendaraan').click(function () {
        $.get('/getDriver', function (data) {

            data.forEach(element => {
                console.log(element.nama);
                var newOpt = $('<option>', {
                    value: element.id,
                    text: element.nama
                });
                $('#add_driver').append(newOpt);
            });
        })
    })




    $('.edit-btn').click(function () {
        var id = $(this).data('id');
        $.get('/getDriver', function (data) {

            data.forEach(element => {
                console.log(element.nama);
                var newOpt = $('<option>', {
                    value: element.id,
                    text: element.nama
                });
                $('#edt_driver').append(newOpt);
            });
        })
        $.get('/kendaraan/' + id + '/edit', function (data) {
            console.log(data);
            $('#edt_nopol').val(data.noPol);
            $('#edt_jeniskendaraan').val(data.jenis_kendaraan);
            $('#edt_bbm').val(data.BBM);
            $('#edt_driver').val(data.user_id);
            $('#editForm').attr('action', '/kendaraan/' + id);
            $('#editdata').modal('show');

        });
    })

    $('#simpan-edit').click(function () {
        var actionUrl = $('#editForm').attr('action');
        console.log(actionUrl);
    })
})

