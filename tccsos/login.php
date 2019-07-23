<?php

include "cabecalho.php";

?>
<div class="container marketing">
    <hr class="featurette-divider">

    <div class="row featurette">
        <form  action="conferirLogin.php" method="post" class="formulario">
            <div class="form-group">
                <label for="emailLogin"><h3>Endereço de email</h3></label>
                <input type="email" class="form-control" id="emailLogin" aria-describedby="emailHelp" placeholder="Seu email" name="emailLogin">
                <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
            </div>
            <div class="form-group">
                <label for="senhaLogin"><h3>Senha</h3></label>
                <input type="password" class="form-control" id="senhaLogin" placeholder="Senha" name="senhaLogin">
            </div>
            <button type="submit" class="btn btn-primary botaoSub1">Enviar</button>
        </form>
    </div>
    <hr class="featurette-divider">
</div>

<?php include "rodape.php"; ?>



