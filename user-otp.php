<!-- header  -->
<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<?php include"includes/headerlog.php";?>
<!-- header  -->

   
 <div class="container-fluid  pt-5">
        <form action="user-otp.php" method="post" class=" " utocomplete="">
        <div class="row p-3 ">
           <div class=" col-xxl-4 col-lg-3 col-md-2"></div>
            <div class="col-xxl-4 col-lg-6 col-md-8 ">
            <div class="row ">
  <div class="col ">
    <div class="card  bggrdnt itemcent">
      <div class="card-body">
        <h2 class="card-title text-center">Login</h2>
        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        <div class="row hoverme">
            <div class="col">
            <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
            
 
  <!------------------------------------------ email -------------------------------------------->
  <div class="form-group">
    <label for="formGroupExampleInput"><h4 class="pt-3">Enter verification code</h4></label>
    <input class="form-control " name="otp" type="number" placeholder="" >
  </div>
  <!------------------------------------------ password -------------------------------------------->
 
  
<!------------------------------------------ role -------------------------------------------->
  <!-- <div class="form-group">
    <label for="formGroupExampleInput"><h4 class="pt-3">Role</h4></label>
    <select class="form-control " autocomplete="off"  name="usRole1">
                              <option disabled selected value="">-- Select Role --</option>
                          
                            </select> -->
    <!-- <select class="form-control ">
  <option>hhh</option>
  <option>Large select</option>
</select> -->
  <!-- </div> -->
  
  <!------------------------------------------ contact -------------------------------------------->
  <!-- <div class="form-group">
    <label for="formGroupExampleInput"><h4 class="pt-3">Contact No#</h4></label>
    <input class="form-control " name="usContact" type="number" placeholder="">
  </div> -->
<!------------------------------------------ address -------------------------------------------->
 <!--  <div class="form-group">
    <label for="formGroupExampleInput"><h4 class="pt-3">Address</h4></label>
    <input class="form-control " name="usAddress" type="text" placeholder="">
  </div> -->

</div>
        </div>
        <!------------------------------------------ submit -------------------------------------------->
       <div class="text-center pt-2"> <button class="btn btn-success" id="clme" name="check">Login</button></div>
        <div class="link login-link text-center pt-2">Already a member? <a href="loging-user.php">Signup here</a></div>
      </div>
    </div>
  </div>
          
        </div>
        <div class="col-xxl-4  col-lg-3 col-md-2"></div>

        </div>
     </form>
   
 </div>      
      
 
     <!-- footer -->
     <?php include"includes/footerlog.php";?>
<!-- footer -->