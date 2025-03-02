<?php 
  $mobil = ['Toyota', 'Honda', 'BMW'];
  $motor = ['Yamaha', 'Suzuki', 'Kawasaki'];
  
  $gabungan = array_merge($mobil, $motor);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kendaraan PHP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      text-align: center;
      margin: 0;
      padding: 0;
    }

    h1 {
      color: #333;
      padding: 20px;
    }

    .kendaraan-container {
      display: grid;
      justify-content: center;
      gap: 50px;
      margin: 20px auto;
      max-width: 800px;
      grid-template-areas: 'mobil motor' 
                           'gabungan gabungan';
    }

    .mobil, .motor {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      width: 250px;
    }

    .mobil {
      grid-area: mobil;
    }

    .motor {
      grid-area: motor;
    }

    .gabungan {
      grid-area: gabungan;
    }

    .mobil h2, .motor h2 {
      color: #444;
      border-bottom: 2px solid #ddd;
      padding-bottom: 10px;
      margin-bottom: 15px;
    }

    figure {
      background: #e0e0e0;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      font-weight: bold;
      color: #222;
    }
  </style>
</head>
<body>
  <h1>Brand Kendaraan</h1>
  <section class="kendaraan-container">
    <div class="mobil">
      <h2>Mobil</h2>
      <?php foreach ($mobil as $m): ?>
      <figure><?php echo $m; ?></figure>
      <?php endforeach; ?>
    </div>
    <div class="motor">
      <h2>Motor</h2>
      <?php foreach ($motor as $m): ?>
      <figure><?php echo $m; ?></figure>
      <?php endforeach; ?>
    </div>
    <div class="gabungan">
      <h1>Gabungan</h1>
      <?php foreach($gabungan as $g) : ?>
        <figure><?php echo $g; ?></figure>
      <?php endforeach; ?>
    </div>
  </section>
</body>
</html>
