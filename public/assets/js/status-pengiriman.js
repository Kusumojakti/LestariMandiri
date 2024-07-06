$(document).ready(function () {
    $(".edit-btn").click(function () {
        var id = $(this).data("id");
        console.log(id);
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
});
