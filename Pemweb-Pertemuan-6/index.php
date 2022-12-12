<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/main.css">
    <title>Tugas Minggu 6 120140168</title>
</head>
<body>
    <header>
        <div class="judul">
            <h1>Angka Integer ke Angka Romawi </h1>
        </div>
    </header>
    <main>
        <div class="input">
            <form action="." method="get">
                <label for="input-angka">
                    <input type="number" name="angka" id="angka" placeholder="Masukan Angka">
                </label>
                <br>
                <input type="submit" value="ubah" id="button">
            </form>
        </div>
        <p>Hasil Konversi = </p>
        <div class="convert">
            <?php
                $angka = $_GET['angka'];
                $hasil = '';
                $romawi_maping = array( 'M' => 1000,
                                    'CM' => 900,
                                    'D' => 500,
                                    'CD' => 400,
                                    'C' => 100,
                                    'XC' => 90,
                                    'L' => 50,
                                    'XL' => 40,
                                    'X' => 10,
                                    'IX' => 9,
                                    'V' => 5,
                                    'IV' => 4,
                                    'I' => 1 
                                 );
                if ($angka != ''){
                      if($angka>0 and $angka<5000){  
                    while ($angka > 0){
                            foreach($romawi_maping as $romawi => $number){
                                if ($angka >= $number){
                                    $angka -= $number;
                                    $hasil .= $romawi;
                                    break;
                                }
                            }
                        }
                        echo '<p>'.$hasil.'</p>';
                }
                elseif($angka<0){
                    echo '<p>Bilangan negatif</p>';
                }
                else{
                    echo '<p>Bilangan lebih dari 4999</p>';
                }
              }
            ?>
        </div>
    </main>
</body>
</html>