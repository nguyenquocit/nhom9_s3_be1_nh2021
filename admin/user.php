<?php include "header.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>USER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">USER</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 8%">
                        User ID
                      </th>
                      <th style="width: 8%" class="text-center">
                        User Name
                      </th>
                      <th style="width: 5%" class="text-center">
                        Role ID
                      </th>
                      <th style="width: 85%">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php
                  $getAllUser = $user->getAllUser();
                  foreach($getAllUser as $value):
                ?>
                  <tr>
                      <td><?php echo $value['user_id'] ?></td>
                      <td><a><?php echo $value['user_name'] ?></a></td>
                      <td><?php echo $value['role_id'] ?></td>
                      <td class="project-actions ">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-danger btn-sm" href="deluser.php?user_id=<?php echo $value['user_id'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.html"; ?>
   