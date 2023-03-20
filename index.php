<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN” “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd”>
<html xmlns=”http://www.w3.org/1999/xhtml”>
<head>
<meta name=”viewport” content=”width=device-width; initial-scale=1.0; maximum-scale=1.0;”>
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
<title>BAKSO SOLO | HITUNG TOTAL BAYAR</title>
<form action="" method="post">
<center>
<h1><strong>APLIKASI HITUNG TOTAL PESANAN</strong></h1>
<p><h1><strong>BAKSO SOLO</strong></h1>


<style>
    input[type=text] {
  border: 2px solid #008CBA;
  height: 50px;
  font-size: 16px;
  text-align: center;
}

hr {
  height: 5px;
           background: black;
           margin: 20px 0;
           box-shadow: 0px 0px 4px 2px rgba(204,204,204,1);
}

body {

    font-family: Arial, Helvetica, sans-serif;
    background-image: url('bg.jpg');
    background-size: cover;
  }

  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 52px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 40px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
  .button2 {
  background-color: #008CBA; 
  color: white; 
  border: 2px solid black;
}

.button2:hover {
  background-color: white;
  color: #008CBA;
  border: 2px solid #008CBA;
}

.buttonred {
  background-color: white; 
  color: black; 
  border: 2px solid red;
}

.buttonred:hover {
  background-color: red;
  color: white;
}

a {
    
}
</style>
</head>
<hr class="hr"> 
<body>


<table style="border:none;font-size:60px">
  <tr>
    <td style="width:50%">MAKAN : </td>
    <td style="width:70%;padding:15px"><input style="font-size:60px;height:100px;" type="text" id="q1" height="100px" name="q1" maxlength="2" size="1" pattern="[0-9]+" title="Masukan angka bukan huruf"><br></td>
  </tr>
  <tr>
    <td style="width:15%">MINUM : </td>
    <td style="width:70%;padding:15px"><input style="font-size:60px;height:100px;" type="text" id="q2" name="q2" maxlength="2" size="1" pattern="[0-9]+" title="Masukan angka bukan huruf"></td>
  </tr>

  <tr>
    <td style="width:18%">ES CAMPUR : </td>
    <td style="width:70%;padding:15px"><input style="font-size:60px;height:100px;" type="text" id="q3" name="q3"   maxlength="2" size="1" pattern="[0-9]+" title="Masukan angka bukan huruf"></td>
  </tr>
</table>


<p><button type="submit" class="button button2" hidden>HITUNG TOTAL BAYAR</button>

<?php 

$jumlahmakan = '0';
$jumlahmakan3 = '0';
$jumlahminum = '0';
$jumlahminum3 = '0';
$jumlahescampur = '0';
$jumlahescampur3 = '0';
$hargamakan = '20.000';
$hargaminum = '5.000';
$hargaescampur = '15.000';


?>
</form>
<hr>



<?php



if (!empty($_POST['q1'])){
$jumlahmakan = strtoupper($_POST['q1']);
$jumlahmakan2 = 20000 * $jumlahmakan;
$jumlahmakan3 = number_format((float)$jumlahmakan2, 0,',','.');
}

if (!empty($_POST['q2'])){
$jumlahminum = strtoupper($_POST['q2']);
$jumlahminum2 = 5000 * $jumlahminum;
$jumlahminum3 = number_format((float)$jumlahminum2, 0,',','.');
}

if (!empty($_POST['q3'])){
$jumlahescampur = strtoupper($_POST['q3']);
$jumlahescampur2 = 15000 * $jumlahescampur;
$jumlahescampur3 = number_format((float)$jumlahescampur2, 0,',','.');
}




/*=========================*/
    










if (empty($_POST)){
}else{


?>
<table style="border:none;font-size:40px;text-align:left">
  <tr>
    <td style="width:35%">🍴  MAKAN : </td>
    <td style="width:45%;">[<b> <?php echo $jumlahmakan; ?> </b>] porsi x <?php echo $hargamakan; ?></td>
    <td style="width:30%">=  <?php echo $jumlahmakan3; ?></td>
  </tr>

  <tr>
    <td>🍺 MINUM : </td>
    <td>[<b> <?php echo $jumlahminum; ?> </b>] porsi x <?php echo $hargaminum; ?> </td>
    <td>=  <?php echo $jumlahminum3; ?></td>
  </tr>

  <tr>
    <td>🍹 ES CAMPUR : </td>
    <td>[<b> <?php echo $jumlahescampur; ?> </b>] porsi x <?php echo $hargaescampur; ?></td>
    <td>=  <?php echo $jumlahescampur3; ?></td>
  </tr>

</table>
<hr>
<table style="border:none;font-size:40px;text-align:left">
</tr>

<tr>
<td style="text-align:center;width:80%" colspan="2"><strong>J U M L A H</strong></td>
<td>= <?php $total = $jumlahmakan3+$jumlahminum3+$jumlahescampur3;
            $totalbayar = number_format($total, 0,',','.');
            echo $totalbayar;   ?></td>
  </tr>
</table>
<hr>
<?php
echo '<p><p><br><p><br><br><h1><a style="font-size:65px">💰 TOTAL BAYAR 💰</a>';
echo '<br><a style="background-color:orange;color:white;font-size:195px">&nbsp;' . $jumlahmakan3+$jumlahminum3+$jumlahescampur3 . ' ribu&nbsp;</a></h1>';
    ?>






</center>
</body>
</html>
<?php
}
?>
