<!-- Modal -->
<div class="modal fade" id="usermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" id="fname">

        <label for="mname">Middle Name</label>
        <input type="text" class="form-control" id="mname">

        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname">

        <label for="password">Password</label>
        <input type="password" class="form-control" id="password">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveUser">Save changes</button>
      </div>
    </div>
  </div>
</div>