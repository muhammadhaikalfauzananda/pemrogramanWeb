<?php
include_once("config.php");
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama=$_POST['nama'];
    $umur=$_POST['umur'];
    $hp=$_POST['hp'];
    $email=$_POST['email'];
        
    $result = mysqli_query($mysqli, "UPDATE daftar SET nama='$nama',umur='$umur',hp='$hp',email='$email',hp='$hp' WHERE id=$id");
    
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM daftar WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $umur = $user_data['umur'];
    $hp = $user_data['hp'];
    $email = $user_data['email'];
    
}
?>
<html>
<head>	
    <title>ubah data peserta</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="ubah.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>umur</td>
                <td><input type="text" name="umur" value=<?php echo $umur;?>></td>
            </tr>
            <tr> 
                <td>hp</td>
                <td><input type="text" name="hp" value=<?php echo $hp;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>