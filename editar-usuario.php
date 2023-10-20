<form action="?page=salvar" method="POST">
    <?php 
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST['id'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control">
        <label>Email:</label>
        <input type="eamil" name="email" value="<?php print $row->email;?>" class="form-control">
        <label>Senha:</label>
        <input type="password" name="senha" required class="form-control">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc;?>" class="form-control">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>