<!-- Modal Update -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" id="updateForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="hidden" id="user_id" name="user_id">

            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name_up" name="name" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email_up" name="email" required>
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">Password</label>
                <input type="text" class="form-control" id="password_up" name="password_up" required>
              </div>
              <div class="form-group mb-3">
                <p>foto opsional </p>
                <label class="font-weight-bold">Foto</label>
                <input type="file" class="form-control" name="foto">
            </div>

            <div class="modal-footer"></div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
