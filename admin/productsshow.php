
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

        <div class="col-sm-9">

          <a href="products.php">

          <button style="color:green">Toevoegen</button>

        </a>

       

          <?php

          include('../partials/connect.php');



          $sql="Select * from products";;

          $results=$connect->query($sql);

          while($final=$results->fetch_assoc()){ ?>



            <a href="proshow.php?pro_id=<?php echo $final['id']?>">

            <h3><?php echo $final['id'] ?>: <?php echo $final['name']?></h3><br>



          </a>



          <a href="proupdate.php?up_id=<?php echo $final['id'] ?>">

            <button>Update</button>

          </a>



          <a href="prodelete.php?del_id=<?php echo $final['id'] ?>">

            <button style="color:red">Verwijderen</button>

          </a><hr>





         <?php }

          ?>











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