<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penjualan</title>
</head>
<body>
    <div style="margin-left: auto; margin-right: auto;">
    <form id="form1" name="form1" method="post" action="proses.php">
        <table style="width: 400; height: 201; border: 1; margin-left: auto; margin-right: auto;">
            <tr>
                <th colspan="2" style="background-color: #cd5c5c;">
                    Form Transaksi Penjualan
                </th>
            </tr>
            <tr>
                <td style="width: 124; background-color: #ffc0cb;">
                <strong>Nama Barang</strong>
                </td>
                <td style="width: 243; background-color: #ffc0cb;">&nbsp;
                <input type="text" name="nama_barang"/></td>
            </tr>
            <tr>
                <td style="background-color: #ffc0cb;"><strong>Harga</strong></td>
                <td style="background-color: #ffc0cb;">&nbsp;
                <input type="text" name="harga" size="10"/></td>
            </tr>
            <tr>
                <td style="background-color: #ffc0cb;"><strong>Jumlah (Quantity)</strong></td>
                <td style="background-color: #ffc0cb;">&nbsp;
                <input type="text" name="jumlah" size="4"/></td>
            </tr>
            <tr>
                <td style="background-color: #ffc0cb;"><strong>Status</strong></td>
                <td style="background-color: #ffc0cb;">
                    <label><input type="radio" name="status" value="pelanggan" id="status_0" checked="checked"/>
                    Pelanggan
                    </label>
                    <label><input type="radio" name="status" value="Bukan pelanggan" id="status_1"/>
                    Bukan Pelanggan
                    </label>
                </td>
            </tr>
            <tr>
                <td style="background-color: #ffc0cb;"><strong>Kota Pengiriman</strong></td>
                <td style="background-color: #ffc0cb;">&nbsp;
                <select name="kota">
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Purwokerto">Purwokerto</option>
                </select>
                </td>
            </tr>
            <tr>
                <td style="height: 28; background-color: #ffc0cb;">&nbsp;</td>
                <td style="background-color: #ffc0cb;">
                    <input name="" type="submit" value="proses"/>&nbsp;
                    <input name="" type="reset" value="hapus"/>
                </td>
            </tr>
        </table>
    </form>
    </div>
    <div style="margin-left: auto; margin-right: auto;">
        <a href="view.php" >Cek Transaksi</a>
    </div>
</body>
</html>