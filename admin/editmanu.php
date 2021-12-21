
<?php include "header.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manufacture Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <form action="editmn.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <?php
              if(isset($_GET['manu_id'])){
              $manu_id = $_GET['manu_id'];
              //echo $id;
              $getManubyManuid = $manu->getManufactureByManuId($manu_id);
              foreach($getManubyManuid as $valuee):
            ?>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Manu ID</label>
                <input type="text" id="inputName" class="form-control" name="manu_id" value="<?php echo $valuee['manu_id'] ?>">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Manu Name</label>
                <input type="text" id="inputName" class="form-control" name="name" value="<?php echo $valuee['manu_name'] ?>">
              </div>
            </div>
            <?php
              endforeach;
            }
            ?>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input type="submit" name="submit" value="Create new Porject" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.html"; ?>