<!DOCTYPE html>
<html>
<?php
include('adminpartials/session.php');
include('adminpartials/head.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include('adminpartials/header.php');
  include('adminpartials/aside.php');
  

  ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>

        <small>Controle paneel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-9">
         <a href="products.php">
            <button style="color: green">Voeg producten toe</button>
          </a>
          <hr>
        </div>
        <div class="col-sm-9">
         <a href="categories.php">
            <button style="color: green">Voeg een categorie toe</button>
          </a>
          <hr>
        </div>
         <div class="col-sm-9">
         <a href="orders.php">
            <button style="color: green">Uw bestellingen</button>
          </a>
          <hr>
        </div>
        
        
        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include('adminpartials/footer.php');
 ?>
</body>
</html>
