<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>SIMPLE CRUD APPLICATION</title>
<link href="<?php echo base_url();?>style/style.css" rel="stylesheet" type="text/css"/>

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

table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td,th {
  border: 1px solid #ddd;
  padding: 8px;
}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #EFF0EF;
  color: #000;
}

</style>

<body>

  <div class="content">
    <h1><?php echo $title;?></h1>
    <div class="data">
    <table>
      <tr>
        <td width="30%">ID</td>
        <!-- Fetch id through $pelajar variable assigned at view function from Pelajar controler  -->
        <td><?php echo $pelajar['id'];?></td>
      </tr>
      <tr>
        <td valign="top">Nama</td>
        <td><?php echo $pelajar['nama'];?></td>
      </tr>
      <tr>
        <td valign="top">Alamat</td>
        <td><?php echo $pelajar['alamat'];?></td>
      </tr>
      <tr>
        <td valign="top">Jantina</td>
        <td><?php echo ($pelajar['jantina'])=='M'?'Lelaki':'Perempuan';?></td>
      </tr>
      <tr>
        <td valign="top">Tarikh Lahir (dd-mm-yyyy)</td>
        <td><?php echo date('d-m-Y',strtotime($pelajar['tarikh_lahir']));?></td>
      </tr>
    </table>
    </div>
    <br/>
    <?php echo $link_back;?>
  </div>

</body>
</html>