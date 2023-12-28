<!doctype html>
<html lang="en">
  <head>
    <title>Program untuk membuat angka terbalik </title>
    <!-- Bootstrap core CSS -->

  </head>

  <body>
<form method="POST">
<table> 
  <tr>
    <p> program untuk membalik angka </p>
    <td>Masukkan angka 1 : <input type="integer" name="angka"></td>
    <td>Masukkan angka 2 : <input type="integer" name="angka2"></td>
  </tr>
</table>
  <input type="submit" name="submit">
</form>
</body>

<?php
$angka = $_POST['angka'];
$angka2= $_POST['angka2'];
echo 'angka pertama yang dimasukkan '.$angka.'</br>';
echo 'angka pertama yang dimasukkan kedua '.$angka2.'</br>';
echo 'Jadi Hasil pembalikan angka : '.$angka2 .',' .$angka;
 
?>
</body>

</html>
