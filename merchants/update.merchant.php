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
            <h5 class="m-0 text-dark text-capitalize">Update merchant information</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item small"><a href="#">Home</a></li>
              <li class="breadcrumb-item small active">Update merchant</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

         <!-- container -->
         <div class="container bg-white p-4">
        <!--  -->
        <form action="">
        
          <div class="row  mb-3">
              <div class="col-md-6">
                  <div class="input-group-sm">
                  <label for="merchant_name" class="control-label text-right small text-capitalize">Merchant name <span class="text-danger">*</span></label>
                  <select class="custom-select" name="merchant_name" id="merchant_name">
                  <option disabled >Merchant name</option>
                  <option value=""></option>
                  
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
          <button type="submit" class="btn btn-primary btn-sm"> <i class="fas fa-plus-circle" arial-hidden="True"></i> Save Changes</button>
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