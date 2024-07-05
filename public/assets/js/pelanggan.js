$(document).ready(function () {
    $('.edit-btn').click(function () {
        var id = $(this).data('id');
        console.log(id);
        $.get('/pelanggan/' + id + '/edit', function (data) {
            console.log(data);
            $('#edt_namapelanggan').val(data.nama);
            $('#edt_notelpon').val(data.noTelp);
            $('#edt_alamat').val(data.alamat);
            $('#editForm').attr('action', '/pelanggan/' + id);
            $('#editdata').modal('show');
        });
    })

})