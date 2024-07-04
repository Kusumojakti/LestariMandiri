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
            $('#editForm').attr('action', '/karyawan/' + id)
            $('#editdata').modal('show');
        });
    })

    $('#simpan-edit').click(function () {
        var url = $('#editForm').attr('action');
        console.log(url);
    })

    // $('#editForm').submit(function (e) {
    //     e.preventDefault();
    //     var actionUrl = $(this).attr('action');
    //     var formData = $(this).serialize();
    //     $.ajax({
    //         url: actionUrl,
    //         method: 'PUT',
    //         data: formData,
    //         success: function (response) {
    //             $('#editModal').modal('hide');
    //             location.reload(); // Reload halaman untuk melihat perubahan
    //         },
    //         error: function (response) {
    //             // Tangani error
    //             alert('Terjadi kesalahan, silakan coba lagi.');
    //         }
    //     });
    // });
})

