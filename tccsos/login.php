<?php

include "cabecalho.php";

?>
<div class="container marketing">
    <hr class="featurette-divider">

    <div class="row featurette">
        <form>
            <div class="form-group">
                <label for="emailLogin">Endereço de email</label>
                <input type="email" class="form-control" id="emailLogin" aria-describedby="emailHelp" placeholder="Seu email">
                <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
            </div>
            <div class="form-group">
                <label for="senhaLogin">Senha</label>
                <input type="password" class="form-control" id="senhaLogin" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <hr class="featurette-divider">
</div>

<?php include "rodape.php"; ?>



