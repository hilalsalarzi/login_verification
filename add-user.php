<!-- header  -->
<?php include"includes/header.php";?>
<!-- header   -->
   
 


<div class="container-fluid ">
  

 <h2>Add User</h2>

 <div class="row ">
  <div class="col-md-3"></div>
  <div class="col-md-6 ">
  <div class="card text-center bggrdnt">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    <?php 
   echo "hello ".$_SESSION["user_name"];
    ?>

    2 days ago
  </div>
</div>
  </div>
 </div>


</div>










     <!-- footer -->
  <?php include"includes/footer.php";?>
<!-- footer -->