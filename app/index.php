<?php include "templates/head.php"; ?>
<?php include "templates/header.php"; ?>
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Annual Goals</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">MRR</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">ARR</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">$480,000</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">OKRs</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                  </div>
                  <div class="col">
                    <div class="progress progress-sm mr-2">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">NPS</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">58</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content Row -->
    <div class="row">
      <div class="col-lg-3 mb-4">
        <!-- Illustrations -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Annual Strategic Plan</h6>
          </div>
          <div class="card-body">
            <div class="text-center">
              <span class="badge badge-pill badge-secondary">Status: Draft</span>
              <span class="badge badge-pill badge-secondary">Due Date: 10/1</span>
              <span class="badge badge-pill badge-secondary">Owner: Tom</span>
              <hr>
              <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 10rem;" src="../img/sync-docs.svg" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <a class="btn btn-primary float-right" rel="nofollow" href="/company-plan.html">Edit Draft &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Projections Card-->
      <div class="col-xl-6 col-lg-7">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">MRR Projections</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <div class="chart-area">
              <canvas id="myAreaChart"></canvas>
            </div>
            <a class="float-right mt-3" target="_blank" rel="nofollow" href="https://stratdocs.io/">Update Projections &rarr;</a>
          </div>
        </div>
      </div>
      <!-- Task List-->
      <div class="col-lg-3 mb-4">
        <!-- Illustrations -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Process List</h6>
          </div>
          <div class="card-body">
            <div class="text-center">
              <span class="badge badge-pill badge-secondary">Status: Draft</span>
              <span class="badge badge-pill badge-secondary">Due Date: 10/1</span>
              <span class="badge badge-pill badge-secondary">Owner: Tom</span>
            </div>
            <div class="list-group mt-3">
              <a href="#" class="list-group-item list-group-item-action"><strike>1. Create the annual strategic plan</strike></a>
              <a href="#" class="list-group-item list-group-item-action"><strike>2. Share plan for review</strike></a>
              <a href="#" class="list-group-item list-group-item-action">3. Update financial model</a>
              <a href="#" class="list-group-item list-group-item-action disabled">4. Update project roadmap</a>
              <a href="#" class="list-group-item list-group-item-action disabled">5. Set leadership meeting to review documents</a>
              <a href="#" class="list-group-item list-group-item-action disabled">6. Create team specific strategic plans</a>
              <a href="#" class="list-group-item list-group-item-action disabled">7. Set OKRs or similar</a>
              <a href="#" class="list-group-item list-group-item-action disabled">8. Update KPIs</a>
              <a href="#" class="list-group-item list-group-item-action disabled">9. Share details with the company</a>
              </div>
          </div>
        </div>
      </div>


    </div>

  </div>
  <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->
<?php include "templates/footer.php"; ?>
