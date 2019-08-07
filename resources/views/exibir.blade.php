<h1>Visualizar Imóvel</h1>

<?php

        if(!empty($propriedade)){

            foreach ($propriedade as $prop){
                ?>

                    <h2>Título do Imóvel: <?= $prop->titulo; ?> </h2>

                    <p>Descrição: <?= $prop->descricao; ?>  </p>

                    <p>Valor do Aluguel: R$ <?= number_format($prop->preco_aluguel, 2, ',', '.'); ?> </p>

                    <p>Valor de Venda: R$ <?= number_format($prop->preco_compra , 2, ',', '.'); ?> </p>

                <?php

            }
        }


