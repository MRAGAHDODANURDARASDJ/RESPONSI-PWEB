<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+SC&family=Rampart+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="form.css">
    <title>Kost Ultramen</title>
</head>
<body>
<SCRIPT LANGUAGE="JavaScript">{
         alert("ISI FORM SESUAI KETENTUAN");
         }
     </SCRIPT>
    <h1 align="center">KOST ULTRAMEN</h1>
            </SCRIPT>
    <div class="container">
        <form class="form1" name="formpeminat" action="proses.php"  method="post">
            <div class="form-group">
              <label for="email">Masukkan Email</label>
              <input type="text" class="form-control " name="email" id="email" placeholder="Masukkan Email">
            </div>
            <div class="form-group">
              <label for="nama">Masukkan nama</label>
              <input type="text" class="form-control " name="nama" id="nama" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="umur">Masukkan Umur</label>
                <input type="number" class="form-control " name="umur" id="umur" placeholder="Masukkan Umur">
              </div>
            <div class="form-group">
              <label for="telp">Masukkan Nomor Telepon</label>
              <input type="number" class="form-control " name="notelp" id="notelp" placeholder="Masukkan Nomor Telepon">
            </div>
            <div class="form-group">
            <label>Pilih type kamar</label><br>
            <select class="form-control" name="kamar" id="kamar">
              <option>Kamar Pertalite</option>
              <option>Kamar Wibu</option>
              <option>Kamar Aesthetic</option>
            </select>
            </div>
            <div class="form-group">
            <label>Masukkan tanggal pemesanan
              <input type="date" class="form-control " name="tanggal" id="tanggal" required pattern="\d{4}-\d{2}-\d{2}">
            </label>
            </div>
            <button type="submit" class="btn btn-secondary btn-block">Submit</button>
            
          </form>
    </div>
</body>
</html>
