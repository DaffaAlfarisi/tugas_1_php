<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<h2>Daftar Harga</h2>
<?php
$cireng = 1000;
$es_duren = 15000;
$es_milo = 20000;
$es_teh = 5000;
$piscok = 1000;
?>
<table style="width:25%">
  <tr>
    <th>No</th>
    <th>Nama Makanan</th> 
    <th>Harga</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Cireng</td>
    <td>Rp .<?php echo $cireng ?></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Es Duren</td>
    <td>Rp .<?php echo $es_duren ?></td>
  </tr>
  <tr>
    <td>3</td>
    <td>Es Milo</td>
    <td>Rp .<?php echo $es_milo ?></td>
  </tr>
  <tr>
    <td>4</td>
    <td>Es Teh</td>
    <td>Rp .<?php echo $es_teh ?></td>
  </tr>
  <tr>
    <td>5</td>
    <td>Es Teh</td>
    <td>Rp .<?php echo $piscok ?></td>
  </tr>
</table>

</body>
</html>

