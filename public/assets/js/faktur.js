// filter no faktur

document.getElementById("nofaktur").addEventListener("change", function () {
    var nofaktur = this.value;
    fetch(`/search-faktur/${nofaktur}`)
        .then((response) => response.json())
        .then((data) => {
            var tbody = document.getElementById("faktur-table-body");
            tbody.innerHTML = "";
            data.forEach(function (item) {
                var tr = document.createElement("tr");
                tr.innerHTML = `
                            <td class="text-bold-500">${item.id}</td>
                            <td class="text-bold-500">${item.tanggal}</td>
                            <td class="text-bold-500">${item.pelanggan.nama}</td>
                            <td class="text-bold-500">${item.pelanggan.alamat}</td>
                            <td class="text-bold-500">${item.shipping_date}</td>
                            <td class="text-bold-500">${item.shipping_status}</td>
                            <td class="text-bold-500">${item.total_pembelian}</td>
                            <td class="text-bold-500">${item.keterangan}</td>
                        `;
                tbody.appendChild(tr);
            });
        });
});

// filter nama pengguna
document.getElementById("pelanggan_id").addEventListener("change", function () {
    var pelanggan_id = this.value;
    fetch(`/search-pelanggan/${pelanggan_id}`)
        .then((response) => response.json())
        .then((data) => {
            var tbody = document.getElementById("faktur-table-body");
            tbody.innerHTML = "";
            data.forEach(function (item) {
                var tr = document.createElement("tr");
                tr.innerHTML = `
                            <td class="text-bold-500">${item.id}</td>
                            <td class="text-bold-500">${item.tanggal}</td>
                            <td class="text-bold-500">${item.pelanggan.nama}</td>
                            <td class="text-bold-500">${item.pelanggan.alamat}</td>
                            <td class="text-bold-500">${item.shipping_date}</td>
                            <td class="text-bold-500">${item.shipping_status}</td>
                            <td class="text-bold-500">${item.total_pembelian}</td>
                            <td class="text-bold-500">${item.keterangan}</td>
                        `;
                tbody.appendChild(tr);
            });
        });
});

document.addEventListener("DOMContentLoaded", function () {
    const dateInput = document.getElementById("date");
    const fakturTableBody = document.getElementById("faktur-table-body");

    dateInput.addEventListener("change", function () {
        const selectedDate = this.value;

        fetch(`/getfaktur/date/${selectedDate}`)
            .then((response) => response.json())
            .then((data) => {
                fakturTableBody.innerHTML = "";

                data.forEach((item) => {
                    const row = document.createElement("tr");

                    row.innerHTML = `
                        <td class="text-bold-500">${item.id}</td>
                        <td class="text-bold-500">${item.tanggal}</td>
                        <td class="text-bold-500">${item.pelanggan.nama}</td>
                        <td class="text-bold-500">${item.pelanggan.alamat}</td>
                        <td class="text-bold-500">${item.user.nama}</td>
                        <td class="text-bold-500">${item.shipping_status}</td>
                        <td class="text-bold-500">${item.total_pembelian}</td>
                        <td class="text-bold-500">${item.keterangan}</td>
                    `;

                    fakturTableBody.appendChild(row);
                });
            });
    });
});
