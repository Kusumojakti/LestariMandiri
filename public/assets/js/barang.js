$(document).ready(function () {
    $(".edit-btn").click(function () {
        var id = $(this).data("id");
        console.log(id);
        $.get("/barang/" + id + "/edit", function (data) {
            console.log(data);
            $("#edt_kodeBrg").val(data.kodeBrg);
            $("#edt_namaBarang").val(data.nama);
            $("#edt_stock").val(data.stock);
            $("#edt_harga").val(data.harga);
            $("#editForm").attr("action", "/barang/" + id);
            $("#editdata").modal("show");
        });
    });

    $("#simpan-edit").click(function () {
        var actionUrl = $("#editForm").attr("action");
        console.log(actionUrl);
    });
});
