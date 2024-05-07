<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title><?php echo $this->template->title->default("Default title"); ?></title>
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
    <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
    </ul>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <?php echo $this->template->navigasi->view("templates/default/menu"); ?>
        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <?php
          // This is the main content partial
          echo $this->template->content->view("templates/default/contents");
        ?>
      </main>
    </div>
  </div>
</body>
</html>