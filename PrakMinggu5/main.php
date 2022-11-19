
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Minggu 5 120140168</title>
</head>

<body>
        <form id="form_mahasiswa" >   
            <label for="prodi">Prodi</label>
                <select name="prodi" id="prodi">
                    <option value="">Pilih Program Studi</option>
                    <option value="IF" > Teknik Informatika </option>
                    <option value="EL" > Teknik Elektro </option>
                    <option value="ME" > Teknik Mesin </option>
                    <option value="TG" > Teknik Geofisika </option>
                    <option value="GL" > Teknik Geologi </opti`on>
                </select>
            </form> 
    <div id="tampilkan-data"></div>
</body>
    <script src = "https://code.jquery.com/jquery-3.6.1.min.js"
            integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
            crossorigin = "anonymous">
    </script>
    <script>
    $(document).ready(function () {
        $("#tampilkan-data").load("tampil.php");
            let data = $("#form_mahasiswa").serialize();
            $.ajax({
                type : "POST",
                url : "tampil.php",
                data : data,
                success : function (response) {
                    $("#tampilkan-data").load("tampil.php");
                }
            });
         });
</script>
</html>