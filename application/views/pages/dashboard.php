<main class="page-section bg-white text-dark mb-0" id="galera">
    <div class="d-flex align-items-center flex-column">
        <h1 class="masthead-subheading text-uppercase mb-0 py-3">Olha só a galera! 😲</h1>



        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr  class="table-dark ">
                        <th colspan="3" class="text-center">
                            📅
                            <?php
                            $data = new DateTime();
                            $meses = array(
                                'January' => 'janeiro',
                                'February' => 'fevereiro',
                                'March' => 'março',
                                'April' => 'abril',
                                'May' => 'maio',
                                'June' => 'junho',
                                'July' => 'julho',
                                'August' => 'agosto',
                                'September' => 'setembro',
                                'October' => 'outubro',
                                'November' => 'novembro',
                                'December' => 'dezembro'
                            );

                            $dataFormatada = $data->format('d \d\e F \d\e Y');
                            $dataFormatada = strtr($dataFormatada, $meses);

                            echo $dataFormatada;
                            ?>
                        </th>
                    </tr>
                    <tr class="table-danger">
                        <th>Como tá?</th>
                        <th>Quem?</th>
                        <th>Quando?</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pessoas as $pessoa): ?>
                        <tr>

                            <td>
                                <?= $pessoa['feeling'] ?>
                            </td>
                            <td>
                                <?= $pessoa['fk_user'] ?>
                            </td>

                            <td>
                                <?= $pessoa['last_activity'] ?>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

</main>