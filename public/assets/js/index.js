$(document).ready(function () {
    $.get('/getAllFaktur', function (data) {
        console.log(data);
        var countPending = 0;
        var countDikirim = 0;
        var countDiterima = 0;

        data.forEach(function (item) {
            if (item.shipping_status === "Pending") {
                countPending++;
            } else if (item.shipping_status === "Dikirim") {
                countDikirim++;
            } else if (item.shipping_status === "Diterima") {
                countDiterima++;
            }
        });

        $('#load_pending').hide();
        $('#pending').removeClass('visually-hidden').find('h3').text(countPending);

        $('#load_dikirim').hide();
        $('#dikirim').removeClass('visually-hidden').find('h3').text(countDikirim);

        $('#load_selesai').hide();
        $('#selesai').removeClass('visually-hidden').find('h3').text(countDiterima);
    });

})