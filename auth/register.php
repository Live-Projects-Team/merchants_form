<?php include "../includes/authheader.php" ?>
<style>
body,.main-footer{
  background-color:#e9ecef;
}
</style>
<div class="col-md-12">
<div class="col-md-4 offset-md-4 mt-5">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="card">
  <img src="<?php echo $asset_url?>key-img/logo.png" class="img-fluid" alt="">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo $base_url?>server/register_process.php" method="post" enctype="multipart/form-data" >
        <div class="input-group mb-3">
          <input type="text" name="myname" class="form-control" placeholder="Full Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-alt"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="myphone" class="form-control" placeholder="Phone Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone-alt"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="myaddress" class="form-control" placeholder="Physical Address">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map-marker-alt"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="myid_number" class="form-control" placeholder="National ID Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="far fa-id-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="mydescription" class="form-control" placeholder="Description" style="height: 60px;">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group  mb-3">
          <select class="form-select form-control" name="myrole" aria-label="Default select example">
                 <option disabled selected>User Role</option>
                 <option value="admin">Administrator</option>
                 <option value="mechant">Mechant</option>
                 <option value="agent">Agent</option>
                 <option value="acountant">Accountant</option>
          </select>
        </div>
        <div class="input-group mb-3" style="display:flex;flex-direction:column;">
          <label for="">user photo</label>
            
            <div class="input-group-append">
            <input type="file" name="profile_pic" class="form-control" id="" style="padding-bottom:40px;">
              <div class="input-group-text">
                <span class="fas fa-user-alt"></span>
              </div>
            </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="mypass" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
      
        <div class="social-auth-links text-center mb-3">
        <button type="submit" name="register_btn" class="btn btn-primary btn-block">Register</button>  
      </div>
      </form>
      <p class="mb-0">
        <a href="<?php echo $base_url ?>auth/login.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>
<script>
</script>
<?php include "../includes/footer.php" ?>