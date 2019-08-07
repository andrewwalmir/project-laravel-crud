<h1>Formulário de Cadastro</h1>

<form action="<?= url('/imoveis/cadastrar')?>" method="post">

    <?= csrf_field(); ?>

    <label for="titulo">Título do Imóvel</label>
    <input type="text" name="titulo" id="titulo">
    <br>

    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
    <br>

    <label for="preco_aluguel">Valor da Locação</label>
    <input type="text" name="preco_aluguel" id="preco_aluguel">
    <br>

    <label for="preco_compra">Valor de Compra</label>
    <input type="text" name="preco_compra" id="preco_compra">
    <br>

    <button type="submit">Cadastrar Imóvel</button>


</form>