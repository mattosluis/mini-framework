<form action="<?=BASE_ULR?>cadastro/insert" method="post">
    Nome <input type="text" name="nome" required>
    Telefone <input type="tel" name="telefone" placeholder="XX999999999" required>
    Email <input type="email" name="email" required>
    Senha <input type="password" name="senha" required>
    <input type="submit" name="insert_cliente" value="Cadastrar">
</form>