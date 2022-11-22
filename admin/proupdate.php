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

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-3">
        </div>

        <div class="col-sm-6">
        <form role="form" action="proupdatehandler.php" method="post" enctype="multipart/form-data">
          <?php
          $newid=$_GET['up_id'];

          include('../partials/connect.php');

          $sql="Select * from products WHERE id='$newid'";

          $results=$connect->query($sql);

          $final=$results->fetch_assoc();


          ?>
          <h1>Products</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Voeg uw product toe" value="<?php echo $final['name'] ?>" name="name">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Prijs" value="<?php echo $final['price'] ?>" name="price">
                </div>
                <div class="form-group">
                  <label for="picture">Foto toevoegen</label>
                  <input type="file" id="picture" name="file" value="<?php echo $final['picture'] ?>">
                </div>
                <div class="form-group">
                  <label for="description">Beschrijving</label>
                  <textarea id="description" class="form-control" rows="10" placeholder="Voeg uw beschrijving toe" value="<?php echo $final['description'] ?>" name="description"></textarea>
                </div>
                <div class="form-group">
                  <label for="category">Categorien</label>
                  <select id="category" name="category" value="<?php echo $final['category'] ?>">
                    <?php
                    $cat="SELECT * from categories";
                    $results=mysqli_query($connect,$cat);
                    while($row=mysqli_fetch_assoc($results)){
                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                  }
                    ?>
                  </select>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" value="<?php echo $final['id'] ?>" name="form_id">
                <button type="submit" class="btn btn-primary" name="update">Update</button>
              </div>
            </form>
</div>
<div class="col-sm-3">
  </div>
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
