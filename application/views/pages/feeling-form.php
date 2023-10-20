 <!-- Masthead-->
 <main class="masthead bg-primary text-white text-center">


<form action="<?= base_url() ?>feeling/new" method="post" class="container">
    <!-- <div class="form-group">
        <label for="formGroupExampleInput">Quem é tu?</label>
        <input type="text" name="name"  class="form-control" id="formGroupExampleInput"
            placeholder="Informe o seu nome ou identifique-se de forma anônima." required>
    </div> -->
    <div class="form-group">
        <label for="formGroupExampleInput2">Quié que tu tá sentindo?</label>
        <input type="text"  name="feeling" class="form-control" id="formGroupExampleInput2"
            placeholder="Compartilhe seu sentimento! Ex: 'Muito feliz!'" required>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Quando?</label>
        <input type="text"  name="last_activity" class="form-control" id="formGroupExampleInput2"
            placeholder="Digite a data do sentimento! Ex: 20231020" required>
    </div>

    <div class="form-group py-3">
        <button type="submit" class="btn btn-light">Enviar</button>
        <button type="reset" class="btn btn-danger">Limpar</button>
    </div>
</form>


</main>

