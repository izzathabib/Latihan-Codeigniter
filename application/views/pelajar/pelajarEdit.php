<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<htmlxmlns="http://www.w3.org/1999/xhtml">
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

th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #EFF0EF;
color: #000;
}

/*label*/
.label {
color: white;
margin: 8px;
padding: 8px;
display: inline-block;
}

.success {background-color: #4CAF50;} /* Green */
</style>
</head>

<body>
  <div class="content">

    <h1><?php echo $title;?></h1>
    <?php echo $message;?>
    <?php echo validation_errors();?>
    <?php echo form_open($action);?>
    <div class="data">
      <table>
      <tr>
        <td width="30%">ID</td>
        <td>
        <input type="text"name="id"disabled="disable"class="text" value="<?php echo (isset($pelajar['id']))?$pelajar['id']:'';?>"/>
        <input type="hidden"name="id"value="<?php echo (isset($pelajar['id']))?$pelajar['id']:'';?>"/>
        </td>
      </tr>
      <tr>
        <td valign="top">nama<span style="color:red;">*</span></td>
        <td>
        <input type="text"name="nama"class="text"value="<?php echo (set_value('nama'))?set_value('nama'):$pelajar['nama'];?>"/>
        <?php echo form_error('nama');?>
        </td>
      </tr>
      <tr>
        <td valign="top">Alamat</td>
        <td>
        <input type="text"name="alamat"class="text"value="<?php echo set_value('alamat')?set_value('alamat'):$pelajar['alamat'];?>"/>
        <?php echo form_error('alamat');?>
        </td>
      </tr>
      <tr>
        <td valign="top">Jantina<spanstyle="color:red;">*</span></td>
        <td>
        <input type="radio"name="jantina"value="M"<?php echo set_radio('jantina','M', TRUE);?>/> Lelaki
        <input type="radio"name="jantina"value="F"<?php echo set_radio('jantina','F');?>/> Perempuan
        <?php echo form_error('jantina');?>
        </td>
      </tr>
      <tr>
        <td valign="top">Date of birth (dd-mm-yyyy)<span style="color:red;">*</span></td>
        <td>
        <input type="text"name="tarikh_lahir"class="text" value=""/>
        <?php echo form_error('tarikh_lahir');?>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit"value="Save"/></td>
      </tr>
      </table>
    </div>
    </form>
    <br/>
    <?php echo $link_back;?>

  </div>
</body>
</html>