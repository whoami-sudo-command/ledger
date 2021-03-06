<?= $this->extend('templates/auth') ?>

<?= $this->section('content') ?>

<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Sign in!</h1>
                </div>
                <form class="user">
                  <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-user" id="exampleInputUsername" placeholder="Enter Username...">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Password...">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input" id="customCheck">
                      <label class="custom-control-label" for="customCheck">Remember
                        Me</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="register.html">Create an Account!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>

<?= $this->endSection() ?>

<?= $this->section('plugins') ?>
<script>
  $('form').submit(function(e) {
    e.preventDefault();
    data = $(this).serialize()
    $.ajax({
      type: "POST",
      url: '<?= base_url('api/auth/login'); ?>',
      data: data,
      success: function(response) {
        location.reload(true);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        Swal.fire(
          'Error!',
          'user or password does not match!',
          'error'
        )
      }
    })
  });
</script>
<?= $this->endSection() ?>