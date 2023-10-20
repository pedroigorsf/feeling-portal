<main class="page-section bg-white text-dark mb-0">
    <div class="d-flex align-items-center flex-column">
        <h1 class="masthead-subheading text-lowercase mb-0 py-3">Tu viu como tão? 😲</h1>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Como tá?</th>
                        <th>Quem?</th>
                        <th>Quando?</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pessoas as $pessoa): ?>
                        <tr>
        <td><?= $pessoa['id'] ?> </td>
        <td><?= $pessoa['feeling'] ?></td>
        <td><?= $pessoa['fk_user'] ?></td>
        <td><?= $pessoa['last_activity'] ?></td>
        <td>x</td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

</main>