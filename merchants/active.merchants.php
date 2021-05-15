<?php include "../includes/header.php"; ?>
  <!-- Main Sidebar Container -->

<?php include "../includes/sidebar.php"; ?>

<?php

include "../includes/config.php"; 

// list of merchats from database

$query = "SELECT * FROM users INNER JOIN merchants ON users.userId = merchants.user_id 
WHERE merchants.status='active'";

$result = mysqli_query($conn, $query);



?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark text-capitalize">All active merchants</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item small"><a href="#">Home</a></li>
              <li class="breadcrumb-item small  active">active merchants</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <div class="container bg-white p-4">

      <div class="table-responsive-sm">

        <table class="table table-hover table-striped table-sm">
        <thead>
        <tr>
        <th>Merchant Name</th>
        <th>Company Name</th>
        <th>TIN Number</th>
        <th>Licence Number</th>
        <th>Postal Address</th>
        <th>Business Phone Number</th>
        <th>Merchant Status</th>
        <th>Business Type</th>
        <th>MSDN</th>
        <th>Business Email</th>
        <th></th>
        <th></th>
        </tr>
        
        </thead>
        <tbody>
        
        <?php
        if(mysqli_num_rows($result)>0){

          while($row=mysqli_fetch_array($result))
          {
            ?>

            <tr>
            <td><?php echo $row['full_name'] ?></td>
            <td><?php echo $row['company_name'] ?></td>
            <td><?php echo $row['tin_number'] ?></td>
            <td><?php echo $row['licence_number'] ?></td>
            <td><?php echo $row['postal_adress'] ?></td>
            <td><?php echo $row['b_phone_number'] ?></td>
            <td><?php echo $row['status'] ?></td>
            <td><?php echo $row['business_type'] ?></td>
            <td><?php echo $row['msdn'] ?></td>
            <td><?php echo $row['business_mail'] ?></td>

            <td><a class="btn btn-primary btn-sm small" href="">Edit</a></td>
            <td><a class="btn btn-danger btn-sm small" href="">Delete</a></td>
            </tr>
            <?php
          }
            
      
        }
        ?>
      
        
        
        </tbody>
        
        </table>
      </div>
      
      </div>

     
       </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "../includes/footer.php"; ?>