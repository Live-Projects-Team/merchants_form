<?php include "includes/header.php"; ?>
  <!-- Main Sidebar Container -->

<?php include "includes/sidebar.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Agents </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Agents </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Agent name</th>
                  <th>Agent number</th>
                  <th>Phone number</th>
                  <th>NIN</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>
                      <button class="btn btn-primary"> <i class="fas fa-edit"></i> edit</button>
                      <button class="btn btn-warning"><i class="fas fa-ban"></i> block</button>
                      <button class="btn btn-danger"><i class="fas fa-trash"></i> delete</button>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>
                      <button class="btn btn-primary"> <i class="fas fa-edit"></i> edit</button>
                      <button class="btn btn-warning"><i class="fas fa-ban"></i> block</button>
                      <button class="btn btn-danger"><i class="fas fa-trash"></i> delete</button>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>
                      <button class="btn btn-primary"> <i class="fas fa-edit"></i> edit</button>
                      <button class="btn btn-warning"><i class="fas fa-ban"></i> block</button>
                      <button class="btn btn-danger"><i class="fas fa-trash"></i> delete</button>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>
                      <button class="btn btn-primary"> <i class="fas fa-edit"></i> edit</button>
                      <button class="btn btn-warning"><i class="fas fa-ban"></i> block</button>
                      <button class="btn btn-danger"><i class="fas fa-trash"></i> delete</button>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>
                      <button class="btn btn-primary"> <i class="fas fa-edit"></i> edit</button>
                      <button class="btn btn-warning"><i class="fas fa-ban"></i> block</button>
                      <button class="btn btn-danger"><i class="fas fa-trash"></i> delete</button>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>
                      <button class="btn btn-primary"> <i class="fas fa-edit"></i> edit</button>
                      <button class="btn btn-warning"><i class="fas fa-ban"></i> block</button>
                      <button class="btn btn-danger"><i class="fas fa-trash"></i> delete</button>
                  </td>
                </tr>   
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
       </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "includes/footer.php"; ?>