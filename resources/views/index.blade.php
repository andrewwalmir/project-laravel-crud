<h1>Listagem de Imóveis</h1>

<p><a href="<?= url('/imoveis/novo');?>">Cadastrar Novo Imóvel</a></p>

<?php
    if(!empty($propriedades)){

        echo "<table>";

        echo  "<tr>
                    <td>Título</td>
                    <td>Valor de Locação</td>
                    <td>Valor de Compra</td>
                    <td>Ações</td>
               </tr>";

        foreach ($propriedades as $propriedade) {

            $linkVisualizar = url('/imoveis/' . $propriedade->url);
            $linkEditar = url('/imoveis/editar/' . $propriedade->url);
            $linkExcluir = url('/imoveis/excluir/' . $propriedade->url);

            echo  "<tr>
                    <td>{$propriedade->titulo}</td>
                    <td>R$ " . number_format($propriedade->preco_aluguel, 2, ',', '.') . "</td>
                    <td>R$ " . number_format($propriedade->preco_compra, 2, ',', '.') . "</td>
                    <td><a href='$linkVisualizar'>Visualizar</a> | <a href='$linkEditar'>Editar</a> | <a href='$linkExcluir'>Remover</a></td>
                </tr>";

        }

        echo "</table>";
    }
?>