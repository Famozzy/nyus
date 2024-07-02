<?php render("navbar") ?>
<div class="container min-vh-100">
  <div class="row justify-content-center" style="margin-top: 128px;">
    <div class="col-md-5">
      <div class="card shadow-sm px-3 py-5">
        <div class="card-body">
          <h3 class="card-title fw-bold mb-3">Login</h3>
          <form action="/login" method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="username" class="form-control" id="username" name="username" placeholder="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
            </div>
            <button type="submit" class="btn btn-primary  w-100 mt-1">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>