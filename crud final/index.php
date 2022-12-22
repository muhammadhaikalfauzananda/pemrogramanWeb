<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all daftar data from database
$result = mysqli_query($mysqli, "SELECT * FROM daftar ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Pendaftaran Lomba</title>
</head>
 
<body>
<a href="tambah.php">Tambah Peserta baru </a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th> 
        <th>umur</th> 
        <th>no_hp</th> 
        <th>Email</th> 
        <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['umur']."</td>";
        echo "<td>".$user_data['hp']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='ubah.php?id=$user_data[id]'>ubah</a> | <a href='hapus.php?id=$user_data[id]'>hapus</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>


