






<!-- Masthead-->
<main class="masthead bg-light text-dark">







<!-- Section: Design Block -->
<section class="text-center">


      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Realize seu cadastro abaixo 😍</h2>
              <form action="<?= base_url() ?>signup/new" method="post" class="container">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" name="name" id="form3Example1" class="form-control" />
                  <label class="form-label" for="form3Example1">Nome</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" name="last_name" id="form3Example2" class="form-control" />
                  <label class="form-label" for="form3Example2">Sobrenome</label>
                </div>
              </div>
            </div>

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
              Cadastrar
            </button>

            
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

</main>