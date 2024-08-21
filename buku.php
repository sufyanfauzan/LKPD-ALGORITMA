<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="POST">
    <div>
      <label for="">Buku</label>
      <input type="number" name="buku" min="1">
      <button type="submit" name="submit">Kirim</button>
    </div>
  </form>
  <?php
    // 1 Buku 10 eksemplar 
    if (isset($_POST['submit'])){
      $buku = $_POST['buku'];
      // echo $buku;

      $eksemplar = $buku * 10;
      // echo $eksemplar;

      $harga_eksemplar = 5000;
      $total_harga_ekssemplar = $eksemplar * $harga_eksemplar;

      if ($eksemplar > 200){
        // echo $eksemplar;

        $harga_100_pertama = 100 * $harga_eksemplar * 0.93;
        // echo $harga_100_pertama;

        $harga_100_kedua = 100 * $harga_eksemplar * 0.83;
        // echo $harga_100_kedua;

        $harga_sisa = ($eksemplar - 200) * $harga_eksemplar * 0.73;

        $harga_total = $harga_100_pertama + $harga_100_kedua + $harga_sisa;
        
      } else if ($eksemplar > 100 && $eksemplar <= 200) {

        $harga_100_pertama = 100 * $harga_eksemplar * 0.95;

        $harga_sisa = ($eksemplar - 100) * $harga_eksemplar * 0.85;

        $harga_total = $harga_100_pertama + $harga_sisa;

      }else {
        $harga_total = $total_harga_ekssemplar;
      }

      echo "Jumlah buku : $buku<br>";
      echo "Jumlah eksemplar : $eksemplar<br>";
      echo "Total harga yang harus dibayar : Rp. " . number_format($harga_total, 0, ',', '.') . "<br>";
    }
  ?>
</body>
</html>