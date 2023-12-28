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
    <p> program untuk memprint angka genap dan ganjil </p>
    <td>Masukkan angka  : <input type="integer" name="angka"></td>
  </tr>
</table>
  <input type="submit" name="submit">
</form>
</body>

<?php
$i = $_POST['angka'];
echo 'range angka yang di masukkan '.$i.'</br>';

   for($no=1;$no<=$i;$no++)
        {
            if($no % 2 == 0)
                {echo "$no = Bilangan Genap<br>";}
            else
                {echo "$no = Bilangan Ganjil<br>";}
        }


?>

</body>

</html>
