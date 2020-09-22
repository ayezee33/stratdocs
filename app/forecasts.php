<?php include "templates/head.php"; ?>
<?php include "templates/header.php"; ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Projections & Forecasts</h1>
      <!-- Content Row -->
      <div class="row">

        <div class="col-lg-12 col-md-6">
          <!-- Area Chart -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="myAreaChart"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <!-- Bar Chart -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
            </div>
            <div class="card-body">
              <div class="chart-bar">
                <canvas id="myBarChart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- /.container-fluid -->
    </div>
  <!-- End of Main Content -->
<?php include "templates/footer.php"; ?>
