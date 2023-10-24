<!-- Masthead-->
<main class="masthead bg-light text-dark">

<!-- Section: Design Block -->
<section class="text-center">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Login</h2>
              <form action="<?= base_url() ?>login/access" method="post" class="container">

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" name="username" id="form3Example3" class="form-control" />
              <label class="form-label" for="form3Example3">Usuário</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password"  name="password" id="form3Example4" class="form-control" />
              <label class="form-label" for="form3Example4">Senha</label>
            </div>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Acessar
            </button>

            
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

</main>