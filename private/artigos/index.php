
<?php include '../layout/header.php' ?>
      <?php include '../layout/sidebar.php'; ?>

      <div class="layout-page">

        <?php include '../layout/navbar.php'; ?>

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row g-6 mb-6">
              <!-- Congratulations card -->
              <div class="col-xxl-4">
                <div class="card h-100">
                  <div class="card-body text-nowrap">
                    <h5 class="card-title mb-1">Congratulations <span class="fw-bold">Norris!</span> 🎉</h5>
                    <p class="card-subtitle mb-3">Best seller of the month</p>
                    <h4 class="text-primary mb-0">$42.8k</h4>
                    <p class="mb-3">78% of target 🚀</p>
                    <a href="javascript:;" class="btn btn-sm btn-primary">View Sales</a>
                  </div>
                  <img
                    src="../../assets/img/illustrations/trophy.png"
                    class="position-absolute bottom-0 end-0 me-4"
                    height="140"
                    alt="view sales" />
                </div>
              </div>
              <!--/ Congratulations card -->

              <!-- Total Profit -->
              <div class="col-xxl-2 col-md-3 col-sm-6">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                      <div class="avatar">
                        <div class="avatar-initial bg-label-primary rounded-3">
                          <i class="ri-shopping-cart-2-line ri-24px"></i>
                        </div>
                      </div>
                      <div class="d-flex align-items-center">
                        <p class="mb-0 text-success me-1">+22%</p>
                        <i class="ri-arrow-up-s-line text-success"></i>
                      </div>
                    </div>
                    <div class="card-info mt-5">
                      <h5 class="mb-1">155k</h5>
                      <p>Total Orders</p>
                      <div class="badge bg-label-secondary rounded-pill">Last 4 Month</div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Total Profit -->

              <!-- Total Expenses -->
              <div class="col-xxl-2 col-md-3 col-sm-6">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                      <div class="avatar">
                        <div class="avatar-initial bg-label-success rounded-3">
                          <i class="ri-handbag-line ri-24px"></i>
                        </div>
                      </div>
                      <div class="d-flex align-items-center">
                        <p class="mb-0 text-success me-1">+38%</p>
                        <i class="ri-arrow-up-s-line text-success"></i>
                      </div>
                    </div>
                    <div class="card-info mt-5">
                      <h5 class="mb-1">$13.4k</h5>
                      <p>Total Sales</p>
                      <div class="badge bg-label-secondary rounded-pill">Last Six Month</div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Total Expenses -->

              <!-- Total Profit chart -->
              <div class="col-xxl-2 col-md-3 col-sm-6">
                <div class="card h-100">
                  <div class="card-header">
                    <div class="d-flex align-items-center mb-1 flex-wrap">
                      <h5 class="mb-0 me-1">$88.5k</h5>
                      <p class="mb-0 text-danger">-18%</p>
                    </div>
                    <span class="d-block card-subtitle">Total Profit</span>
                  </div>
                  <div class="card-body">
                    <div id="totalProfitChart"></div>
                  </div>
                </div>
              </div>
              <!--/ Total Profit chart -->

              <!-- Total Growth chart -->
              <div class="col-xxl-2 col-md-3 col-sm-6">
                <div class="card h-100">
                  <div class="card-header">
                    <div class="d-flex align-items-center mb-1 flex-wrap">
                      <h5 class="mb-0 me-1">$27.9k</h5>
                      <p class="mb-0 text-success">+16%</p>
                    </div>
                    <span class="d-block card-subtitle">Total Growth</span>
                  </div>
                  <div class="card-body">
                    <div id="totalGrowthChart"></div>
                  </div>
                </div>
              </div>
              <!--/ Total Sales chart -->
            </div>
            <div class="row g-6">
              <!-- Organic Sessions Chart-->
              <div class="col-lg-4 col-md-6 order-1 order-lg-0">
                <div class="card h-100">
                  <div class="card-header pb-1">
                    <div class="d-flex justify-content-between">
                      <h5 class="mb-1">Organic Sessions</h5>
                      <div class="dropdown">
                        <button
                          class="btn btn-text-secondary rounded-pill text-muted border-0 p-1"
                          type="button"
                          id="organicSessionsDropdown"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="ri-more-2-line ri-20px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="organicSessionsDropdown">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="organicSessionsChart"></div>
                  </div>
                </div>
              </div>
              <!--/ Organic Sessions Chart-->

              <!-- Project Timeline Chart-->
              <div class="col-lg-8 col-12">
                <div class="card h-100">
                  <div class="row">
                    <div class="col-md-8 col-12 order-2 order-md-0">
                      <div class="card-header">
                        <h5 class="mb-1">Project Timeline</h5>
                        <p class="mb-0 card-subtitle">Total 840 Task Completed</p>
                      </div>
                      <div class="card-body px-2 pt-xl-7">
                        <div id="projectTimelineChart"></div>
                      </div>
                    </div>
                    <div class="col-md-4 col-12 border-start">
                      <div class="card-header">
                        <div class="d-flex justify-content-between">
                          <h5 class="mb-1">Project List</h5>
                          <div class="dropdown">
                            <button
                              class="btn btn-text-secondary rounded-pill text-muted border-0 p-1"
                              type="button"
                              id="projectTimeline"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="ri-more-2-line ri-20px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectTimeline">
                              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                              <a class="dropdown-item" href="javascript:void(0);">Share</a>
                              <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            </div>
                          </div>
                        </div>
                        <p class="mb-0 card-subtitle">4 Ongoing Project</p>
                      </div>
                      <div class="card-body pt-4">
                        <div class="d-flex align-items-center mb-6">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-primary rounded">
                              <i class="ri-smartphone-line ri-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3 d-flex flex-column">
                            <h6 class="mb-1">IOS Application</h6>
                            <small>Task 840/2.5K</small>
                          </div>
                        </div>
                        <div class="d-flex align-items-center mb-6">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-success rounded">
                              <i class="ri-sparkling-2-fill ri-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3 d-flex flex-column">
                            <h6 class="mb-1">Web Application</h6>
                            <small>Task 99/1.42k</small>
                          </div>
                        </div>
                        <div class="d-flex align-items-center mb-6">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-secondary rounded">
                              <i class="ri-bank-card-2-line ri-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3 d-flex flex-column">
                            <h6 class="mb-1">Bank Dashboard</h6>
                            <small>Task 58/100</small>
                          </div>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-info rounded">
                              <i class="ri-pencil-ruler-2-line ri-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3 d-flex flex-column">
                            <h6 class="mb-1">UI Kit Design</h6>
                            <small>Task 120/350</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php include '../layout/footer.php' ?>


