<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JustDo Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- header -->
    <?php require 'template/header.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- sidebar -->
      <?php require 'template/sidebar.php'; ?>

      <!-- contents -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h4>Add Student</h4>
                    <div class="row mt-4">
                      <div class="col-md-8 mx-auto col-12">
                          <form action="" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label for="student-name">Student Name</label>
                                  <input type="text" name="student_name" class="form-control form-control-sm" id="student-name">
                              </div>

                              <div class="form-group">
                                  <label for="student-id">Student ID</label>
                                  <input type="text" name="student_id" class="form-control form-control-sm" id="student-id">
                              </div>

                              <div class="form-group">
                                  <label for="batch-no">Batch No</label>
                                  <input type="text" name="batch_no" class="form-control form-control-sm" id="batch-no">
                              </div>

                              <div class="form-group">
                                  <label for="cell">Student Cell</label>
                                  <input type="text" name="cell" class="form-control form-control-sm" id="cell">
                              </div>

                              <div class="form-group">
                                  <label for="address">Student Address</label>
                                  <input type="text" name="address" class="form-control form-control-sm" id="address">
                              </div>

                              <div class="form-group">
                                  <label for="photo">Student Photo</label>
                                  <input type="file" name="photo" class="form-control form-control-sm" id="photo">
                              </div>

                              <div class="form-group text-right">
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                              </div>

                          </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contents -->

        <!-- footer -->
        <?php require 'template/footer.php'; ?>
      </div>
    </div>
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <script src="js/dashboard.js"></script>
</body>

</html>

