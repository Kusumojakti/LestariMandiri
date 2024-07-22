<!DOCTYPE html>
<html>
<head>
<style>
body {
  padding: 0 20px;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Laporan Pengiriman</h1>

@php
    $no=1
@endphp

<table id="customers">
    <thead>
        <tr>
            <th>No</th>
            <th>No. Faktur</th>
            <th>Tanggal</th>
            <th>Pelanggan</th>
            <th>Alamat</th>
            <th>Tanggal Pengiriman</th>
            <th>Status Pengiriman</th>
            <th>Total Pembelian</th>
            <th>Nama Driver</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $no++ }}</td> 
                <td class="text-bold-500">{{ $item->id }}</td>
                <td class="text-bold-500">{{ $item->tanggal }}</td>
                <td class="text-bold-500">{{ $item->pelanggan->nama }}</td>
                <td class="text-bold-500">{{ $item->pelanggan->alamat }}</td>
                <td class="text-bold-500">{{ $item->shipping_date }}</td>
                <td class="text-bold-500">{{ $item->shipping_status }}</td>
                <td class="text-bold-500">{{ $item->total_pembelian }}</td>
                <td class="text-bold-500">{{ $item->user->nama }}</td>
                <td class="text-bold-500">{{ $item->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
