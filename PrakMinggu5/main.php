
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Minggu 5 120140168</title>
</head>

<body>
    <div class="menu">
        <div id="menu-option">
        <form id="form_mahasiswa" >   
            <label for="prodi">Prodi</label>
                <select name="prodi" id="prodi">
                    <optgroup label="Pilih Program Studi">
                    <option value="IF" id="pilihan-prodi"> Teknik Informatika </option>
                    <option value="EL" id="pilihan-prodi"> Teknik Elektro </option>
                    <option value="ME" id="pilihan-prodi"> Teknik Mesin </option>
                    <option value="TG" id="pilihan-prodi"> Teknik Geofisika </option>
                    <option value="GL" id="pilihan-prodi"> Teknik Geologi </opti`on>
                </select>
            </form> 
        </div>
    </div>
    <div id="tampilkan-data"></div>
</body>
    <script src = "https://code.jquery.com/jquery-3.6.1.min.js"
            integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
            crossorigin = "anonymous">
    </script>
    <script>
        $(document).ready(function () {
            $("#prodi").click(function () {
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
    });
    </script>
</html>