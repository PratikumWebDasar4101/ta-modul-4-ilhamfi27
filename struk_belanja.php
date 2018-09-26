<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1 align="center">Struk Belanja</h1>
    <table border align="center">
      <tr>
        <td></td>
        <td align="right"><?php echo date("d/m/Y"); ?></td>
      </tr>
      <tr>
        <td>Penerima</td>
        <td align="right"><?php echo $_SESSION['name']; ?></td>
      </tr>
      <?php
      $data = $_SESSION['barang'];
      foreach ($data as $value) {
      ?>
      <tr>
        <td colspan="2" align="right">
          <?php echo $value; ?>
        </td>
      </tr>
      <?php } ?>
      <tr>
        <td colspan="2"><hr></td>
      </tr>
      <tr>
        <td>Jasa Pengiriman</td>
        <td align="right"><?php echo $_SESSION['jasa_pengiriman'] . " (" . $_SESSION['harga_jasa_pengiriman'] . ")"; ?></td>
      </tr>
      <tr>
        <td colspan="2"><hr></td>
      </tr>
      <tr>
        <td>Total</td>
        <td>
          <?php
          $total = $_SESSION['total_harga'] + $_SESSION['harga_jasa_pengiriman'];
          echo "Rp" . $total;
          ?>
        </td>
      </tr>
    </table>
  </body>
</html>
