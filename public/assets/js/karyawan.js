$(document).ready(function () {
    $('.edit-btn').click(function () {
        var id = $(this).data('id');
        console.log(id);
        $.get('/karyawan/' + id + '/edit', function (data) {
            console.log(data.username);
            $('#edt_namaKaryawan').val(data.nama);
            $('#edt_username').val(data.username);
            $('#edt_role').val(data.role);
            $('#edt_notelpon').val(data.noTelp);
            $('#edt_alamat').val(data.alamat);
            $('#editForm').attr('action', '/karyawan/' + id);
            $('#editdata').modal('show');
        });
    })

    $('#simpan-edit').click(function () {
        var actionUrl = $('#editForm').attr('action');
        console.log(actionUrl);
    })
})

