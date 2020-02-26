$(document).ready(function () {
    $.ajax({
        url: "http://127.0.0.1:8000/api/datajoin",
        method: 'get',
        success: function (result) {
            var data = result;
            var event_data = '';
            for (var i = 0; i < data.length; i++) {
                event_data += '<tr>';
                event_data += '<td>' + data[i].tanggal_pembelian + '</td>';
                event_data += '<td>' + data[i].nama_pembeli + '</td>';
                event_data += '<td>' + data[i].nama_penjual + '</td>';
                event_data += '<td>' + data[i].nama_produk + '</td>';
                event_data += '<td>' + data[i].jumlah + '</td>';
                event_data += '<td>' + data[i].harga + '</td>';
                event_data += '<td>' + data[i].subtotal + '</td>';
                event_data += '</tr>';
            }
            $("#data").append(event_data);
        }
    });
});
