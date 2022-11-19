<table border="1">
    <tr>
        <th> No. </th>
        <th> NIM </th>
        <th> Nama </th>
        <th> Program Studi </th>
    </tr>
<?php
    include "koneksi.php";

    $query = "SELECT * FROM data_mahasiswa ORDER BY nim ASC  ";

    $result = mysqli_query($connection, $query);
    $i = 0;
    while ($data = mysqli_fetch_array($result)) :
    $i++;
    ?>
        <tr>
            <td> <?= $i ?> </td>
            <td> <?= $data["nim"] ?> </td>
            <td> <?= $data["nama"] ?> </td>
            <td> <?= $data["prodi"] ?> </td>
        </tr>
    <?php
    endwhile
?>
</table>
<script>
    $('#prodi').on('change', function () {

var data = this.value;

var jo = $("tbody").find("tr");
if (this.value == "Semua Prodi") {
    jo.show();
    return;
}
jo.hide();

jo.filter(function (i, v) {
    var $t = $(this);

    if ($t.is(":contains('" + data + "')")) {
        return true;
    }

    return false;
}).show();
   });
</script>