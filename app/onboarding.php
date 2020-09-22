<?php include "templates/head.php"; ?>
<?php include "templates/header.php"; ?>
      <!-- Begin Page Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-6">
            <!-- Modal -->
            <div class="modal fade" id="onboardingModal" style="margin-top: 75px;" tabindex="-1" role="dialog" aria-labelledby="onboardingModal" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="onboardingModal">Let's Get You Started</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label>How many leaders are in your org?</label>
                        <div>
                          <div class="form-check">
                            <input name="leaders" id="leaders_0" type="radio" class="form-check-input" value="solo">
                            <label for="leaders_0" class="form-check-label">Just me</label>
                          </div>
                          <div class="form-check">
                            <input name="leaders" id="leaders_1" type="radio" class="form-check-input" value="small">
                            <label for="leaders_1" class="form-check-label">2-3</label>
                          </div>
                          <div class="form-check">
                            <input name="leaders" id="leaders_2" type="radio" class="form-check-input" value="medium">
                            <label for="leaders_2" class="form-check-label">3-5</label>
                          </div>
                          <div class="form-check">
                            <input name="leaders" id="leaders_3" type="radio" class="form-check-input" value="large">
                            <label for="leaders_3" class="form-check-label">5+</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Do you currently have a strategic planning process?</label>
                        <div>
                          <div class="form-check">
                            <input name="process" id="process_0" type="radio" class="form-check-input" value="yes">
                            <label for="process_0" class="form-check-label">Yes</label>
                          </div>
                          <div class="form-check">
                            <input name="process" id="process_1" type="radio" class="form-check-input" value="no">
                            <label for="process_1" class="form-check-label">No</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>How often do you currently do strategic planning</label>
                        <div>
                          <div class="form-check">
                            <input name="interval" id="interval_0" type="checkbox" aria-describedby="intervalHelpBlock" class="form-check-input" value="never">
                            <label for="interval_0" class="form-check-label">Never</label>
                          </div>
                          <div class="form-check">
                            <input name="interval" id="interval_1" type="checkbox" aria-describedby="intervalHelpBlock" class="form-check-input" value="annual">
                            <label for="interval_1" class="form-check-label">Annually</label>
                          </div>
                          <div class="form-check">
                            <input name="interval" id="interval_2" type="checkbox" aria-describedby="intervalHelpBlock" class="form-check-input" value="quarterly">
                            <label for="interval_2" class="form-check-label">Quarterly</label>
                          </div>
                          <div class="form-check">
                            <input name="interval" id="interval_3" type="checkbox" aria-describedby="intervalHelpBlock" class="form-check-input" value="monthly">
                            <label for="interval_3" class="form-check-label">Monthly</label>
                          </div>
                          <span id="intervalHelpBlock" class="form-text text-muted">Check all that apply</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Do you use OKRs?</label>
                        <div>
                          <div class="form-check">
                            <input name="okrs" id="okrs_0" type="radio" class="form-check-input" value="yes">
                            <label for="okrs_0" class="form-check-label">Yes</label>
                          </div>
                          <div class="form-check">
                            <input name="okrs" id="okrs_1" type="radio" class="form-check-input" value="no">
                            <label for="okrs_1" class="form-check-label">No</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <a href="../app/index.php" class="btn btn-primary">Get Started </a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
<!-- Custom scripts for all pages-->
<?php include "templates/footer.php"; ?>
