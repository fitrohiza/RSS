<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require "koneksi.php";
    $query = mysqli_query ($conn, "SELECT * FROM transaksi ORDER BY id DEC");
    ?>
    <div>
        <table width = "870" border = "1">
        <h2>Tabel Transaksi Penjualan</h2>
        <tr>
            <th style = "background_color = #ffc0cb">Id</th>
            <th style = "background_color = #ffc0cb">Nama Barang</th>
            <th style = "background_color = #ffc0cb">Harga</th>
            <th style = "background_color = #ffc0cb">Quantity</th>
            <th style = "background_color = #ffc0cb">Sub Total</th>
            <th style = "background_color = #ffc0cb">Status</th>
            <th style = "background_color = #ffc0cb">Diskon</th>
            <th style = "background_color = #ffc0cb">Kota Kirim</th>
            <th style = "background_color = #ffc0cb">Onkos Kirim</th>
            <th style = "background_color = #ffc0cb">Total Bayar</th>
            <th style = "background_color = #ffc0cb">Aksi</th>
        </tr>
        <?php if (mysqli_num_rows($query)>0) { ?>
            <?php
                $id = "1";
                while ($data = mysqli_fetch_array($query)) {
            ?>
            <td>
                <?php echo $id ?></td>
                <td><?php echo $data["nama_barang"]; ?></td>
                <td><?php echo $data["harga"]; ?></td>
                <td><?php echo $data["jumlah"]; ?></td>
                <td><?php echo $data["subtotal"]; ?></td>
                <td><?php echo $data["status"]; ?></td>
                <td><?php echo $data["diskon"]; ?></td>
                <td><?php echo $data["kota"]; ?></td>
                <td><?php echo $data["ongkos"]; ?></td> 
                <td><?php echo $data["total"]; ?></td>
                <td><?php echo "<a href='edit.php?id=".$data['id']."!> Edit</a>"; ?>
                <?php echo "<a href='edit.php?id=".$data['id']."'> Edit </a>"; ?>
                Deleted</a>";?></td>
            </tr>
            <?php $id++; } ?>
            <?php } ?>
        </table>
    </div>
    <br>
    <div align="center">
        <a href="input.php" > &lt;&lt; Kembali Ke Form Utama</a>
    </div>
</body>
</html>