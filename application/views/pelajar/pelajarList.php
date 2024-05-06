<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type"content="text/html; charset=iso-8859-1"/>
<title>SIMPLE CRUD APPLICATION</title>
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

  tr:nth-child(even){background-color: #f2f2f2;}
  tr:hover {background-color: #ddd;}

  th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #EFF0EF;
    color: #000;
    }
    /*pagination*/
    .paging {
    float: right;
    padding: 5px;
    }
    .paging a {
    margin: 5px;
    text-decoration: none;
    }
    .label {
    color: white;
    margin: 8px;
    padding: 8px;
    display: inline-block;
  }
  .success {background-color: #4CAF50;} /* Green */
</style>
<body>
  <div class="content">
    <h1>Contoh Insert Update dan delete</h1>
    
    <div class="paging"><?php echo $pagination;?></div>
    <div class="data">
      <table cellspacing="0" cellpadding="4" border="0">
        <thead>
          <tr>
            <th>No</th>
            <th><?php echo anchor('pelajar/index/'.$offset.'/nama/'.$new_order,'Nama')?></th>
            <th><?php echo anchor('pelajar/index/'.$offset.'/alamat/'.$new_order,'Alamat')?></th>
            <th><?php echo anchor('pelajar/index/'.$offset.'/jantina/'.$new_order,'Jantina')?></th>
            <th><?php echo anchor('pelajar/index/'.$offset.'/tarikh_lahir/'.$new_order,'Tanggal Lahir (dd-mm-yyyy)')?></a></th>
            <th>Actions</th>
          </tr>
        <tbody>
        <?php
        $bil=$offset;
        foreach ($pelajars as $pelajar):
        ?>
          <tr>
            <td><?php echo ++$bil?></td>
            <td><?php echo $pelajar->nama?></td>
            <td><?php echo $pelajar->alamat?></td>
            <td><?php echo strtoupper($pelajar->jantina=='M'?'Lelaki':'Perempuan')?></td>
            <td><?php echo date('d-m-Y',strtotime($pelajar->tarikh_lahir))?></td>
            <td>
            <?php echo anchor('pelajar/view/'.$pelajar->id,'Papar',array('class'=>'view'))?>
            <?php echo anchor('pelajar/update/'.$pelajar->id,'Kemaskini',array('class'=>'update'))?>
            <?php echo anchor('pelajar/delete/'.$pelajar->id,'Padam',array('class'=>'delete','onclick'=>"return confirm('Apakah Anda yakin ingin menghapus data pelajar?')"))?>
            </td>
          </tr>
        <?php endforeach;?>
        </tbody>
        </thead>
      </table>
    </div>
    <div class="paging"><?php echo $pagination;?></div><br/>
    <?php echo anchor('pelajar/add/','Tambah Pelajar baru',array('class'=>'add'));?>
  </div>
</body>
</html>