$(document).ready(function () {
    $('#mytables').on('click', '.edit-btn', function () {
        var id = $(this).data("id");
        // console.log(id);
        $.get("/faktur/" + id + "/edit", function (data) {
            console.log(data);
            $("#edt_nofaktur").val(data.id);
            $("#edt_tanggal").val(data.tanggal);
            $("#edt_alamat").val(data.pelanggan.alamat);
            $("#edt_driver").val(data.user.nama);
            $("#edt_status-kirim").val(data.shipping_status);
            $("#editForm").attr("action", "/faktur/" + id);
            $("#editdata").modal("show");
        });
    });

    $('#nofaktur').change(function () {
        $.get('/search-faktur/' + this.value, function (data) {
            console.log(data);
            var table = $('#mytables tbody');
            table.empty();

            data.forEach(element => {
                var newRow = $('<tr>');
                newRow.append('<td class="text-bold-500">' + element.id + '</td>');
                newRow.append('<td class="text-bold-500">' + element.tanggal + '</td>');
                newRow.append('<td class="text-bold-500">' + element.pelanggan.nama + '</td>');
                newRow.append('<td class="text-bold-500">' + element.pelanggan.alamat + '</td>');
                newRow.append('<td class="text-bold-500">' + element.user.nama + '</td>');
                newRow.append('<td class="text-bold-500">' + element.shipping_status + '</td>');
                newRow.append('<td><button class="btn btn-primary edit-btn" id="edit" data-bs-target="#editdata" data-bs-toggle="modal" data-id="' + element.id + '">Edit</button></td>');
                table.append(newRow);

            });
            $(this).closest('tr').remove();

        });
    })

    $('#pelanggan_id').change(function () {
        $.get('/search-pelanggan/' + this.value, function (data) {
            console.log(data);
            var table = $('#mytables tbody');
            table.empty();

            data.forEach(element => {
                var newRow = $('<tr>');
                newRow.append('<td class="text-bold-500">' + element.id + '</td>');
                newRow.append('<td class="text-bold-500">' + element.tanggal + '</td>');
                newRow.append('<td class="text-bold-500">' + element.pelanggan.nama + '</td>');
                newRow.append('<td class="text-bold-500">' + element.pelanggan.alamat + '</td>');
                newRow.append('<td class="text-bold-500">' + element.user.nama + '</td>');
                newRow.append('<td class="text-bold-500">' + element.shipping_status + '</td>');
                newRow.append('<td><button class="btn btn-primary edit-btn" id="edit" data-bs-target="#editdata" data-bs-toggle="modal" data-id="' + element.id + '">Edit</button></td>');
                table.append(newRow);

            });
            $(this).closest('tr').remove();

        });
    })

    $('#date').change(function () {
        console.log(this.value);
        $.get('/getfaktur/date/' + this.value, function (data) {
            console.log(data);
            var table = $('#mytables tbody');
            table.empty();

            data.forEach(element => {
                var newRow = $('<tr>');
                newRow.append('<td class="text-bold-500">' + element.id + '</td>');
                newRow.append('<td class="text-bold-500">' + element.tanggal + '</td>');
                newRow.append('<td class="text-bold-500">' + element.pelanggan.nama + '</td>');
                newRow.append('<td class="text-bold-500">' + element.pelanggan.alamat + '</td>');
                newRow.append('<td class="text-bold-500">' + element.user.nama + '</td>');
                newRow.append('<td class="text-bold-500">' + element.shipping_status + '</td>');
                newRow.append('<td><button class="btn btn-primary edit-btn" id="edit" data-bs-target="#editdata" data-bs-toggle="modal" data-id="' + element.id + '">Edit</button></td>');
                table.append(newRow);

            });
            $(this).closest('tr').remove();

        });
    })
});
