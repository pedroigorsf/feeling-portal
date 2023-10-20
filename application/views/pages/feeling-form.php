<!-- Masthead-->
<main class="masthead bg-primary text-white text-center">

    <?php if (isset($pessoa)): ?>
        <form action="<?= base_url() ?>feeling/update/<?= $pessoa['id'] ?>" method="post" class="container">
        <?php else: ?>
            <form action="<?= base_url() ?>feeling/new" method="post" class="container">
            <?php endif; ?>

            <!-- <div class="form-group">
        <label for="formGroupExampleInput">Quem é tu?</label>
        <input type="text" name="name"  class="form-control" id="formGroupExampleInput"
            placeholder="Informe o seu nome ou identifique-se de forma anônima." required>
    </div> -->
            <div class="form-group">
                <label for="formGroupExampleInput2"><strong>Hoje eu tô que tô:</strong></label>
                <input type="text" name="feeling" class="form-control" id="formGroupExampleInput2"
                    placeholder="Compartilhe seu sentimento! Ex: 'Muito feliz!'" required
                    value="<?= isset($pessoa) ? $pessoa['feeling'] : ""; ?>">
            </div>


            <div class="form-group py-3">
                <button type="submit" class="btn btn-light">Alterar</button>
                <a href="<?= base_url() ?>" type="reset" class="btn btn-danger">Cancelar</a>
            </div>
        </form>


</main>