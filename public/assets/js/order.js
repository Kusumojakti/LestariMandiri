$(document).ready(function () {
    // add data
    $('#addOrder').click(function () {
        $.get('/getAllBrg', function (data) {
            var newOpt = $('<option>', {
                text: "Pilih Barang",
            });
            $('#add_barang').append(newOpt);
            data.forEach(element => {
                console.log(element.nama);
                var newOpt = $('<option>', {
                    value: element.kodeBrg,
                    text: element.nama,
                    'data-harga': element.harga
                });
                $('#add_barang').append(newOpt);
            });
        })
    })

    $('#add_barang').change(function () {
        var optionVal = $(this).find(':selected');
        var harga = optionVal.data('harga');
        $('#add_harga').val(harga);
    })


    $('#simpanOrder').click(function () {
        var newRow = $('<tr>');
        newRow.append('<td class="text-bold-500">' + $('#add_barang').val() + '</td>');
        newRow.append('<td class="text-bold-500">' + $('#add_barang option:selected').text() + '</td>');
        newRow.append('<td class="text-bold-500">' + $('#add_quantity').val() + '</td>');
        newRow.append('<td class="text-bold-500">' + $('#add_harga').val() + '</td>');

        // $('#myTable tbody').append(newRow);
        // $('#tambahorderan').modal('hide');

        var deleteButton = $('<button class="btn btn-danger deleteRow">Delete</button>');
        var actionTd = $('<td>').append(deleteButton);
        newRow.append(actionTd);

        $('#myTable tbody').append(newRow);
        $('#tambahorderan').modal('hide');

        // Attach click event to the delete button
        deleteButton.click(function () {
            $(this).closest('tr').remove();
        });
    })

    $('#tambahorderan').on('hidden.bs.modal', function () {
        $('#add_barang').empty();
        $('#add_quantity').val('');
        $('#add_harga').val('');
        $('#add_keterangan').val('');
    })



    $('#order').click(function () {
        var tableData = [];
        $('#myTable tbody tr').each(function () {
            var row = $(this);
            var rowData = {
                kodeBrg: row.find('td:eq(0)').text(),
                quantity: row.find('td:eq(2)').text(),
                harga: row.find('td:eq(3)').text(),
            };
            tableData.push(rowData);
        });
        $('#tableData').val(JSON.stringify(tableData));
        console.log($('#tableData').val());
    })

})
