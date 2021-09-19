 <!-- Register Modal -->
 <div class="modal fade" id="registerModalLong" tabindex="-1" role="dialog" aria-labelledby="registerModalLongTitle" aria-hidden="true">
   <?php
 include 'register_modals_database_code.php';
 ?>
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLongTitle">Register Yourself</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="Email" id="inputEmail4" placeholder="Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" name="Password" id="inputPassword4" placeholder="Password">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Confirm Password</label>
                <input type="text" class="form-control" name="Cpassword" id="inputPassword4" placeholder="Confirm Password">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Your Address</label>
              <input type="text" class="form-control" name="Address" id="inputAddress" placeholder="Address">
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name="City" id="inputCity" placeholder="City">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <input type="text" class="form-control" name="State" id="inputState" placeholder="State">
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Pincode</label>
                <input type="text" class="form-control" name="Pincode" id="inputZip" placeholder="Pin">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Which City You Want To Visit..</label>
              <input type="text" class="form-control" name="PreferredCity" id="inputAddress" placeholder="Enter Your prefered Destination">
            </div>
            <div class="form-group">
              <label for="inputAddress">Contact No</label>
              <input type="number" class="form-control"  name="Contact" id="inputAddress" placeholder="Contact No">
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <button type="submit" id="registerbtn" class="btn btn-primary">Register</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>