<html>

<head>
    <title>Delete</title>
</head>

<body>
    <?php require "../koneksi.php";
    $id = $_GET['id'];

    // sql to delete a record 
    $sql = "DELETE FROM transaksi WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Data Berhasil Dihapus";
    } else {
        echo "Data Gagal Dihapus: " . mysqli_error($conn);
    }

    // mengalihkan ke halaman index.php
    header("location:view.php");
    ?>
    <br>
</body>

</html>