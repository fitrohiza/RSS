<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>
<body>
    <?php
    require "koneksi.php";

    $nama_barang = $_POST ['nama_barang'];
    $harga = $_POST ['harga'];
    $jumlah = $_POST ['jumlah'];
    $status = $_POST ['status'];
    $kota = $_POST ['kota'];

    $subTotal = $harga * $jumlah;
    
    switch ($status){
        case "pelanggan":
            $diskon = $subTotal * 0.1;
            break;
            default:
            $diskon = 0;
    }

    if ($kota == "Jakarta"){
        $ongkos = 20000;
    }elseif ($kota == "Bandung"){
        $ongkos = 10000;
    }else{
        $ongkos = 30000;
    }

    $total = $subTotal - $diskon + $ongkos;

    $sql = "INSERT INTO transaksi (nama_barang, harga, jumlah, subtotal, statusPel, kota, diskon, ongkos, total) VALUES ('$nama_barang','$harga','$jumlah','$subTotal',$status,'$kota','$diskon',$ongkos','$total')";

    if (mysqli_query ($conn, $sql)){
        echo "Record baru berhasil dibuat";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    ?>
    <div>
        <table style="width: 400; border: 1; margin-left: auto; margin-right: auto;">
            <tr>
                <td colspan="2" style ="border = 1">
                    <div><strong>HASIL PERHITUNGAN</strong></div>
                </td>
            </tr>
            <tr>
                <td style ="width= 116 ; background_color= #ffc0cb">Nama Barang</td>
                <td style ="width= 165 ; background_color= #ffc0cb">&nbsp;
                <?php echo "$nama_barang"; ?>
                </td>
            </tr>
            <tr>
                <td style = "background_color= #ffc0cb">Harga</td>
                <td style = "background_color= #ffc0cb">&nbsp;
                <?php echo "Rp. ".number_format ($harga); ?>
                </td>
            </tr>
            <tr>
                <td style = "background_color= #ffc0cb">Quantity</td>
                <td style = "background_color= #ffc0cb">&nbsp;
                <?php echo "$jumlah"; ?>
                </td>
            </tr>
            <tr>
                <td style = "background_color= #ffc0cb">Sub Total</td>
                <td style = "background_color= #ffc0cb">&nbsp;
                <?php echo "Rp. ".number_format ($subTotal); ?>
                </td>
            </tr>
            <tr>
                <td style = "background_color= #ffc0cb">Status</td>
                <td style = "background_color= #ffc0cb">&nbsp;
                <?php echo "$status"; ?>
                </td>
            </tr>
            <tr>
                <td style = "background_color= #ffc0cb">Diskon</td>
                <td style = "background_color= #ffc0cb">&nbsp;
                <?php echo "Rp. ".number_format ($diskon); ?>
                </td>
            </tr>
            <tr>
                <td style = "background_color= #ffc0cb">Ongkos Kirim</td>
                <td style = "background_color= #ffc0cb">&nbsp;
                <?php echo "Rp. ".number_format ($ongkos); ?>
                <?php echo " ($kota ) "; ?>
                </td>
            </tr>
            <tr>
                <td style = "background_color= #666666" class ="putih"><strong>Total</strong></td>
                <td style = "background_color= #666666">&nbsp;
                <?php echo "Rp. ".number_format ($total); ?>
                </td>
            </tr>
        </table>
        <a href="input.php"> &lt;&lt; Back</a>
    </div>
</body>
</html>