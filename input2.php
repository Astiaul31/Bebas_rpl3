<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <center>
      <form action="" method="post">
       <label for="1">Masukkan Input : </label>
       <input type="number" id="1" name="angka">
       <button type="submit" name="kirim">Kirim</button>
       </form>
</center>

       <?php
       if (isset($_POST['kirim'])) {
         $angka = $_POST['angka'];

        $b=$angka;

         for ($i = 1; $i <= $angka; $i++){
            echo "<center>";
            for ($a =1; $a <= $b; $a++) {
            echo "$a &nbsp";
            }
            $b--;
            echo "<br>";
            }
           
       }
       ?>
</body>
</html>