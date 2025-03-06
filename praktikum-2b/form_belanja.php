<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="font-size: 18px;">
    <form action="nilai_mahasiswa.php" method="POST" class="container mt-5">
    <fieldset class="border border-dark p-3 rounded" style="background-color: #2980B9;">
    <legend class="float-none w-auto px-3 fw-bold h3">Form Belanja Online</legend>
    <div class="form-group row">
        <label for="nim" class="col-4 col-form-label">Costumer</label>
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
              </div>
            </div>
            <input id="nama" name="nama" placeholder="*Nama Costumer" type="text" class="form-control" required="required" maxlength="50" minlength="3">
          </div>
        </div>
    </div>
    <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="mesin cuci"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
        <label for="nim" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
              </div>
            </div>
            <input id="nama" name="nama" placeholder="*Jumlah" type="text" class="form-control" required="required" maxlength="50" minlength="3">
          </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-4 col-8">
            <button type="submit" name="proses" class="btn btn-primary">Kirim</button>
        </div>
    </div>

    <div class="col-md-6">
                <br>
                <div class="harga-container">
                    <h4 class="text-center">Daftar Harga</h4>
                    <ul>
                        <li><strong>TV</strong>: Rp 4.200.000</li>
                        <li><strong>Kulkas</strong>: Rp 3.100.000</li>
                        <li><strong>Mesin Cuci</strong>: Rp 3.800.000</li>
                    </ul>
                    <p class="text-muted text-center">Harga dapat berubah sewaktu-waktu</p>
                </div>
  </div>
  
    <style>
    .border-belize-hole {
      background-color: #2980B9;
    }
    .bg-belize-hole {
      background-color: #2980B9;
    }
    .btn-primary {
      background-color: primary;
    }
    .btn-primary:hover {
      background-color: primary;
      color: white;
    }
  </style>
    </fielsed>
    </legend>
    </form>
</body>
</html>