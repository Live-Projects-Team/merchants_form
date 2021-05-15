<?php include "../includes/header.php"; ?>

  <!-- Main Sidebar Container -->

<?php include "../includes/sidebar.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark text-capitalize">Merchant registration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item small"><a href="#">Home</a></li>
              <li class="breadcrumb-item small active">Add merchant</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      <!-- container -->
        <div class="container bg-white p-4">

        <!-- send data into database -->

        <?php 
        include "../includes/config.php"; 
        
        if(isset($_POST['add_merchants'])){

          $merchant_name = $_POST['merchant_name'];
          $company_name = $_POST['company_name'];
          $tin_number = $_POST['tin_number'];
          $licence_number = $_POST['licence_number'];
          $postal_address = $_POST['postal_address'];
          $bussiness_phone = $_POST['business_phone_number'];
          $merchant_status = $_POST['merchant_status'];
          $business_type = $_POST['business_type'];
          $msdn = $_POST['msdn'];
          $business_email = $_POST['business_email'];


          $sql ="INSERT INTO `merchants`(
           `user_id`, `company_name`, 
           `tin_number`, `licence_number`,
            `postal_adress`, `b_phone_number`, 
            `status`, `business_type`, 
            `msdn`, `business_mail`) VALUES (
                '{$merchant_name}', '{$company_name}', '{$tin_number}','{$licence_number}',
                '{$postal_address}', '{$bussiness_phone}', '{$merchant_status}', '{$business_type}',
                '{$msdn}', '{$business_email}'

            )";
            $query = mysqli_query($conn, $sql);

            if(!$query){
              die(mysqli_connect_error($conn));
            }
            else{
              $response = array(
                
                'message'=>'merchant added successfully!!'
              );
            }
        }
        // Get all users from database
        $users_query = "SELECT * FROM `users` ORDER BY full_name";
        $result = mysqli_query($conn, $users_query);
       
        ?>


        <!-- Messge -->
          <?php if(!empty($response)) {?>
          <div class="alert alert-info" role="alert">
  
          <?php echo $response['message']; ?>

          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <?php }?>

        <!--  -->
        <form action="" method="POST">
        
          <div class="row  mb-3">
              <div class="col-md-6">
                  <div class="input-group-sm">
                  <label for="merchant_name" class="control-label text-right small text-capitalize">Merchant name <span class="text-danger">*</span></label>
                  <select class="custom-select" name="merchant_name" id="merchant_name">
                  <option disabled >Merchant name</option>
                  
                  <!-- filter users data to select field -->
                  <?php while($row = mysqli_fetch_array($result)):;?>
                  <option value="<?php echo $row['userId']?>"><?php echo $row['full_name'] ?></option>

                  <?php endwhile ?>
                  
                  </select>
                  </div>
          </div>

          <div class="col-md-6">
         <div class="input-group-sm">
            <label for="company_name" class="control-label text-right small text-capitalize">Company name<span class="text-danger">*</span> </label>

              <input type="text" name="company_name" id="company_name" class="form-control">
            </div>
              </div>
          </div>
        
          <div class="row  mb-3">
              <div class="col-md-6">
                  <div class="input-group-sm">
                  <label for="tin_number" class="control-label text-right small">TIN Number<span class="text-danger">*</span></label>
                  <input type="text" name="tin_number" id="tin_number" class="form-control">
                  </div>
          </div>

          <div class="col-md-6">
         <div class="input-group-sm">
            <label for="licence_number" class="control-label text-right small text-capitalize">Licence number<span class="text-danger">*</span> </label>

              <input type="text" name="licence_number" id="licence_number" class="form-control">
            </div>
              </div>
          </div>

          <div class="row  mb-3">
              <div class="col-md-6">
                  <div class="input-group-sm">
                  <label for="postal_address" class="control-label text-right small text-capitalize">Postal address<span class="text-danger">*</span></label>
                  <input type="text" name="postal_address" id="postal_address" class="form-control">
                  </div>
          </div>

          <div class="col-md-6">
         <div class="input-group-sm">
            <label for="business_phone" class="control-label text-right small text-capitalize">Business phone number<span class="text-danger">*</span> </label>

              <input type="tel" name="business_phone_number" id="business_phone" class="form-control">
            </div>
              </div>
          </div>

          <div class="row  mb-3">
              <div class="col-md-6">
                  <div class="input-group-sm">
                  <label for="status" class="control-label text-right small text-capitalize">Merchant status <span class="text-danger">*</span></label>
                  <select class="custom-select" name="merchant_status" id="status">
                  <option disabled >Merchant status</option>
                  <option value="active">Active</option>
                  <option value="banned">Banned</option>
                  
                  </select>
                  </div>
          </div>

          <div class="col-md-6">
         <div class="input-group-sm">
            <label for="business_type" class="control-label text-right small text-capitalize">Business type<span class="text-danger">*</span> </label>

              <input type="text" name="business_type" id="business_type" class="form-control">
            </div>
              </div>
          </div>
          
          <div class="row  mb-3">
              <div class="col-md-6">
                  <div class="input-group-sm">
                  <label for="msdn" class="control-label text-right small">MSDN<span class="text-danger">*</span></label>
                  <input type="text" name="msdn" id="msdn" class="form-control">
                  </div>
          </div>

          <div class="col-md-6">
         <div class="input-group-sm">
            <label for="business_email" class="control-label text-right small text-capitalize">Business email<span class="text-danger">*</span> </label>

              <input type="email" name="business_email" id="business_email" class="form-control">
            </div>
              </div>
          </div>

          <div class="input-group-sm">
          <button type="submit" name="add_merchants" class="btn btn-primary btn-sm"> <i class="fas fa-plus-circle" arial-hidden="True"></i> Add Merchant</button>
          </div>

        </form>
        <!-- form -->
        
        </div> 
        <!-- container -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

     
       </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "../includes/footer.php"; ?>