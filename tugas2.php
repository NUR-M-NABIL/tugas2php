<form action="tugas2.php" method="POST">
<fieldset>

<!-- Form Name -->
<h1 align="center">FORM BELANJA</h1>
<center>
<!-- Text input-->
<div class="form-group row">
  <label class="col-md-4 control-label" for="textinput">Nama Pelanggan</label>  
  <div class="col-md-4">
  <input id="pelanggan" name="pelanggan" type="text" placeholder="isi nama anda" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group row">
  <label class="col-md-4 control-label" for="selectbasic">Pilihan Produk</label>
  <div class="col-md-4">
    <select id="produk" name="produk" class="form-control">
      <option value="">--- Pilih Produk ---</option>
      <option value="sepeda">Sepeda</option>
      <option value="motor">Motor</option>
      <option value="mobil">Mobil</option>
    </select>
  </div>
</div>

<div class="form-group row">
  <label class="col-md-4 control-label" for="input">Jumlah Beli</label>  
  <div class="col-md-4">
  <input id="input" name="input" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-grou row">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
    <button id="batal" name="batal" class="btn btn-success">Batal</button>
  </div>
</div>
</center>

</fieldset>
</form>

<?php

$pelanggan = $_POST['pelanggan'];
$produk = $_POST['produk'];
$jumlah = $_POST['input'];
$proses = $_POST['submit'];


// if ($produk == "sepeda") $harsat='Rp.3000.000';
// else if ($produk == "motor") $harsat='Rp.15.000.000';
// else if ($produk == "mobil") $harsat='Rp.90.000.000';
// else $harsat='';

//SWITCHCASE
switch($produk){
    case 'sepeda' :
        $harsat='3000000';
        break;
    case 'motor' :
        $harsat='15000000';
        break;
    case 'mobil' :
        $harsat='90000000';
        break;
    default:
        $harsat='';
}

$total = ($jumlah*$harsat);
$diskon = 0.20*$total;
$ppn = 0.10*($total-$diskon);
$bersih = ($total-$diskon)+$ppn;

if(isset($proses)){ //sebagai pencegah error handling

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GG</title>
</head>
<body>
    <!--cetak dlm html -->
    <p> NAMA : <?= $pelanggan ?></p>
    <p> Produk Pilihan : <?= $produk ?></p>
    <p> Jumlah Beli : <?= $jumlah ?></p>
    <p> Harga Satuan : Rp. <?= $harsat ?></p>
    <p> Total harga : Rp. <?= $total ?></p>
    <p> Diskon Harga : Rp. <?= $diskon ?></p>
    <p> PPN : Rp. <?= $ppn ?></p>
    <p> Harga Bersih : Rp. <?= $bersih ?></p>
    <?php } ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTables</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">
</head>
<body>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sepeda</td>
                <td>Rp.3000.000</td>
            </tr>
            <tr>
                <td>Motor</td>
                <td>Rp.15.000.000</td>
            </tr>
            <tr>
                <td>Mobil</td>
                <td>Rp.90.000.000</td>
            </tr>

        </tbody>
        <tfoot>
        </tfoot>
    </table>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="
    https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
    <script>
        new DataTable('#example', {
    layout: {
        topStart: {
    
        }
    }
});
    </script>
</body>
</html>
