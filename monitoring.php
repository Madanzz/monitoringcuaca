<!DOCTYPE html>
<html lang="en">
<head>
    <link href="./assets/icon/logo.jpeg" rel="icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONCA</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="style.css">
     <!-- icon  -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body style="background-color: #96D2D9;">
    <h1 class="h1" align="center">MONITORING CUACA</h1>

<?php
        include "koneksi.php";

        $query = mysqli_query($koneksi, "SELECT * FROM  tbmonitor ORDER BY id DESC LIMIT 1");
        while ($data = mysqli_fetch_array($query)){
?>

    <div class="container">
        <div class="kotak">
            <h2 class="h2">Suhu</h2>
            <div class="nilai">
            <?php echo $data ['suhu'] ?><font size ="7">ºC</font>
            </div>
            </div>
        <div class="kotak">
            <h2 class="h2">Kelembaban</h2>
            <div class="nilai">
            <?php echo $data ['kelembaban'] ?><font size ="7">%</font>
            </div>
        </div>
        <div class="kotak">
            <h2 class="h2">Tekanan Udara</h2>
            <div class="nilai">
            <?php echo $data ['tekanan_udara'] ?><font size ="7">hPa</font>
            </div>
        </div>
        <div class="kotak">
            <h2 class="h2">Kualitas Udara</h2>
            <div class="nilai">
            <?php echo $data ['kualitas_udara'] ?>
            </div>
        </div>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameter Lingkungan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Parameter Lingkungan</h1>

    <!-- Card 1: Parameter Suhu -->
    <div class="card text-center">
        <h2>Parameter Suhu (°C)</h2>
        <table>
            <thead>
                <tr>
                    <th>Rentang Suhu</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>≤ 0</td>
                    <td>Sangat Dingin</td>
                    <td>Potensi pembekuan</td>
                </tr>
                <tr>
                    <td>1 - 15</td>
                    <td>Dingin</td>
                    <td>Nyaman untuk sebagian orang</td>
                </tr>
                <tr>
                    <td>16 - 30</td>
                    <td>Normal</td>
                    <td>Suhu ideal</td>
                </tr>
                <tr>
                    <td>31 - 40</td>
                    <td>Hangat</td>
                    <td>Agak panas</td>
                </tr>
                <tr>
                    <td>> 40</td>
                    <td>Panas</td>
                    <td>Suhu ekstrem</td>
                </tr>
                <tr>
                    <td>> 90</td>
                    <td>Sangat Panas</td>
                    <td>Berbahaya</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Card 2: Parameter Kelembaban -->
    <div class="card text-center">
        <h2 class>Parameter Kelembaban (%)</h2>
        <table>
            <thead>
                <tr>
                    <th>Rentang Kelembaban</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>≤ 30</td>
                    <td>Kering</td>
                    <td>Udara kering, rentan dehidrasi</td>
                </tr>
                <tr>
                    <td>31 - 60</td>
                    <td>Normal</td>
                    <td>Kelembaban ideal</td>
                </tr>
                <tr>
                    <td>61 - 80</td>
                    <td>Lembap</td>
                    <td>Mulai terasa lengket</td>
                </tr>
                <tr>
                    <td>> 80</td>
                    <td>Sangat Lembap</td>
                    <td>Udara pengap</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Card 3: Parameter Tekanan Udara -->
    <div class="card text-center">
        <h2>Parameter Tekanan Udara (hPa)</h2>
        <table>
            <thead>
                <tr>
                    <th>Rentang Tekanan</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>< 950</td>
                    <td>Rendah</td>
                    <td>Potensi badai atau cuaca buruk</td>
                </tr>
                <tr>
                    <td>950 - 1015</td>
                    <td>Normal</td>
                    <td>Tekanan udara biasa</td>
                </tr>
                <tr>
                    <td>> 1015</td>
                    <td>Tinggi</td>
                    <td>Potensi cuaca cerah</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php } ?>
</body>
</html>