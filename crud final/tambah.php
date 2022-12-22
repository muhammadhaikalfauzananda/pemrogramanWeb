<html>
<head>
    <title>tambah jumlah pendaftar</title>
</head>
 
<body>
    <a href="index.php">kembali ke halaman utama</a>
    <br/><br/>
 
    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>umur</td>
                <td><input type="text" name="umur"></td>
            </tr>
            <tr> 
                <td>Nomor handphone</td>
                <td><input type="text" name="hp"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="tambah" ></td>
            </tr>
        </table>
    </form>
    
    <?php

    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $hp = $_POST['hp'];
        $email = $_POST['email'];
        
        include_once("config.php");
                
        $result = mysqli_query($mysqli, "INSERT INTO daftar(nama,umur,hp,email) VALUES('$nama','$umur','$hp','$email')");
    
        echo "User tambahed successfully. <a href='index.php'>View daftar</a>";
    }
    ?>
</body>

</script>
</html>