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
        Dashboard
        <small>Controle paneel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>


    <section class="content">
      <div class="row">
        <div class="col-sm-3">
        </div>

        <div class="col-sm-6">
        <form role="form" action="cathandler.php" method="post">
          <h1>Categories</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="category">Categorien</label>
                  <input type="text" class="form-control" id="category" placeholder="Voeg uw categorie toe" name="name">
                </div>
                
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Toevoegen</button>
              </div>
            </form>
</div>
<div class="col-sm-3">
  </div>
</div>
    </section>
  </div>
 <?php
 include('adminpartials/footer.php');
 ?>
</body>
</html>
