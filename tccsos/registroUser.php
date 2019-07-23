<?php

include "cabecalho.php";

?>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->



        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <h1 class="tituloFormSerp">Registro De Usuario</h1>
            <form method="post" class="formulario" action="registroUser.php?acao=cadastrar">
                <div class="form-group">
                    <label for="email"><h3>Email</h3></label>
                    <input required="true" class="form-control" type="email" placeholder="Email" name="emailRegi">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input required="true" name="senhaRegi" type="password" class="form-control" id="senhaLogin" placeholder="Senha" name="senhaLogin">
                </div>
                <button type="submit" class="btn btn-primary botaoSub2">Enviar</button>
            </form>



        </div>




<?php include "rodape.php"; ?>
