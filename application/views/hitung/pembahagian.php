<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to CodeIgniter</title>
<style type="text/css">
  body {
    background-color: #fff;
    margin: 40px;
    font-family: Lucida Grande, Verdana, Sans-serif;
    font-size: 14px;
    color: #4F5155;
  }
  a {
    color: #003399;
    background-color: transparent;
    font-weight: normal;
  }
  h1 {
    color: #444;
    background-color: transparent;
    border-bottom: 1px solid #D0D0D0;
    font-size: 16px;
    font-weight: bold;
    margin: 24px 0 2px 0;
    padding: 5px 0 6px 0;
  }
</style>
</head>
<body>
  <h1>Pembahagian!</h1>
  <p>Silakan masukan data berikut!!</p>
  <?php echo validation_errors()?>
  <?php echo form_open('hitung/pembahagian');?>
  <?php echo form_input('v1',$v1);?> /
  <?php echo form_input('v2',$v2);?><br>
  <?php echo form_submit('submit','Hitung!!');?>
  <?php echo form_close();?><br>
  Hasil : <?php echo $hasil;?>
  <p><br/>Page rendered in {elapsed_time} seconds</p>
</body>
</html>