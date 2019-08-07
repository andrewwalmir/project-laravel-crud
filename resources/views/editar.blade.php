<h1>Formulário de Edição</h1>

<?php
        $propriedade = $propriedade[0];

?>

<form action="<?= url('/imoveis/atualizar', ['id' => $propriedade->id])?>" method="post">

    <?= csrf_field(); ?>
    <?= method_field('PUT'); ?>

    <label for="titulo">Título do Imóvel</label>
    <input type="text" name="titulo" id="titulo" value="<?= $propriedade->titulo ?>">
    <br>

    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="10"><?= $propriedade->descricao ?></textarea>
    <br>

    <label for="preco_aluguel">Valor da Locação</label>
    <input type="text" name="preco_aluguel" id="preco_aluguel" value="<?= $propriedade->preco_aluguel?>" >
    <br>

    <label for="preco_compra">Valor de Compra</label>
    <input type="text" name="preco_compra" id="preco_compra" value="<?= $propriedade->preco_compra ?>" >
    <br>

    <button type="submit">Salvar</button>


</form>