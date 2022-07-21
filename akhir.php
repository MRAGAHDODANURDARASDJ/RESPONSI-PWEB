<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="akhir.css">
    <title>DATA KOST</title>
</head>
<body>
    <a href="index.php"><h1 align="center">KOST ULTRAMEN</h1></a>

    <div class="header">
        <h2>DATA PEMESAN</h2>
    </div>
            <?php
                $fp = fopen("datakost.txt","r");
                echo"<table border=1>";
                while($isi = fgets($fp,500))
            {
                $pisah = explode("|",$isi);
                echo"<tr><td>Email </td><td>: $pisah[0]</td></tr>";
                echo"<tr><td>Nama </td><td>: $pisah[1]</td></tr>";
                echo"<tr><td>Umur </td><td>: $pisah[2]tahun</td></tr>";
                echo"<tr><td>No.Telp </td><td>: $pisah[3]</td></tr>";
                echo"<tr><td>Jenis Kamar </td><td>: $pisah[4]</td></tr>";
                echo"<tr><td>Tanggal </td><td>: $pisah[5]</td></tr>";
                echo"<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
            }
            echo"</table>";
            ?>
    </div>
    

</body>
</html>