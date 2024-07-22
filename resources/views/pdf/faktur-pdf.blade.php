<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>

    <style>
        h4 {
            margin: 0;
        }
        .w-full {
            width: 100%;
        }
        .w-half {
            width: 50%;
        }
        .margin-top {
            margin-top: 1.25rem;
        }
        .footer {
            font-size: 0.875rem;
            padding: 1rem;
            background-color: rgb(241 245 249);
        }
        table {
            width: 100%;
            border-spacing: 0;
        }
        table.products {
            font-size: 0.875rem;
        }
        table.products tr {
            background-color: rgb(96 165 250);
        }
        table.products th {
            color: #ffffff;
            padding: 0.5rem;
            text-align: center; /* Ensure headers are centered */
        }
        table tr.items {
            background-color: rgb(241 245 249);
        }
        table tr.items td {
            padding: 0.5rem;
            text-align: center; /* Ensure cells are centered */
        }
        .total {
            text-align: right;
            margin-top: 1rem;
            font-size: 0.875rem;
        }
        .text-center {
            text-align: center;
        }

    </style>
</head>
<body>
    <table class="w-full">
        <tr>
            <td class="w-half">
                <h1>Lestari Mandiri</h1>
            </td>
            <td class="w-half text-center">
                <h2>No. Faktur: {{ $data->id }}</h2>
            </td>
        </tr>
    </table>
 
    <div class="margin-top">
        <table class="w-full">
            <tr>
                <td class="w-half">
                    <div><h4>To:</h4></div>
                    <div>{{ $data->pelanggan->nama }}</div>
                    <div>{{ $data->pelanggan->alamat }}</div>
                </td>
                <td class="w-half">
                    <div><h4>Driver :</h4></div>
                    <div>{{ $data->user->nama }}</div>

                    <div><h4>Tanggal Pengiriman: </h4></div>
                    <div>{{ $data->shipping_date }}</div>
                </td>
                <td class="w-half">
                    <div><h4>Status Pengiriman : {{ $data->shipping_status }}</h4></div>
                </td>
            </tr>
        </table>
    </div>
 
    <div class="margin-top">
        <table class="products">
            <tr>
                <th class="text-center">Qty</th>
                <th class="text-center">Nama Barang</th>
                <th class="text-center">Harga</th>
            </tr>
            @foreach($data->orders as $order)
                <tr class="items">
                    <td class="text-center">
                        {{ $order->quantity }}
                    </td>
                    <td class="text-center">
                        {{ $order->barang->nama }}
                    </td>
                    <td  class="text-center">
                        {{ $order->barang->harga }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
 
    <div class="total">
        Total: {{ $data->total_pembelian }}
    </div>
 
    <div class="footer margin-top">
        <div>Thank you</div>
        <div>&copy; Lestari Mandiri</div>
    </div>
</body>
</html>
