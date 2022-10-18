<!-- header  -->
<?php require_once "controllerUserData.php"; ?>
<?php include"includes/headerlog.php";?>
<!-- header  -->

   
 <div class="container-fluid  pt-5">
        <form action="login-user.php" method="post" class=" " utocomplete="">
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
    <label for="formGroupExampleInput"><h4 class="pt-3">Email</h4></label>
    <input class="form-control " name="email" type="email" placeholder="" >
  </div>
  <!------------------------------------------ password -------------------------------------------->
  <div class="form-group">
    <label for="formGroupExampleInput"><h4 class="pt-3">Password</h4></label>
    <input class="form-control " name="password" type="password" placeholder="">
    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
  </div>
  
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
       <div class="text-center pt-2"> <button class="btn btn-success" id="clme" name="login">Login</button></div>
        <div class="link login-link text-center pt-2">Already a member? <a href="signup.php">Signup here</a></div>
      </div>
    </div>
  </div>
          
        </div>
        <div class="col-xxl-4  col-lg-3 col-md-2"></div>

        </div>
     </form>
     <div class="row ">
        <div class="col  d-flex justify-content-end fixed-bottom pb-3 px-3  ">
        <div class=" py-2 px-3 bg-dark text-white rounded-pill">
        <div class="form-check form-switch  ">
  <input class="form-check-input" type="checkbox" name="true" id="togglebutton">
  <label class="form-check-label" for="dark">Dark</label>
</div>
 </div>      
      
 
     <!-- footer -->
     <?php include"includes/footerlog.php";?>
<!-- footer -->