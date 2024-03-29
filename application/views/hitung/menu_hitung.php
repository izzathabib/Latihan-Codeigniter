<!DOCTYPE html>
<htmllang="en">
<head>
  <metacharset="utf-8">
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
  <h1>CodeIgniter 2.0 dan Form!</h1>
  <p>Silakan pilih menu dibawah ini.</p>
  <ul>                  
    <li><?php echo anchor("Hitung/pendaraban","Pendaraban");?></li>
    <li><?php echo anchor("Hitung/pembahagian","Pembahagian");?></li>
  </ul>
  <p><br/>Page rendered in {elapsed_time} seconds</p>
</body>
</html>