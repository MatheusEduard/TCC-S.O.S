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
            <h1 class="tituloFormSerp">Formulario De Solicitação De Resgate</h1>
            <form method="post" class="formulario2">
                <div class="form-group">
                    <label for="enderecoResg"><h3>Informe o Seu Endereço</h3></label>
                    <input class="form-control" type="text" placeholder="Rua, Número e Cidade">
                </div>
                <div class="form-group">
                    <label for="tamanhoSerp"><h3>Tamanho da Serpente</h3></label>
                    <select class="form-control">
                        <option>Pequena (De 20cm até 1m)</option>
                        <option>Média (De 1m até 2m)</option>
                        <option>Grande (3m ou mais)</option>
                        <option>Não Sei</option>
                    </select>
                </div>
                    <div class="form-group">
                    <label for="coloracaoSerp"><h3>Coloração da Serpente</h3></label>
                    <select class="form-control">
                        <option>Cores Escuras</option>
                        <option>Cores Vibrantes</option>
                        <option>Não Sei</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cabecaSerp"><h3>A Cabeça da Serpente se Destaca do Corpo?</h3></label>
                    <select class="form-control">
                        <option>Sim</option>
                        <option>Não</option>
                        <option>Não Sei</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pupilaSerp"><h3>Formato da Pupila da Serpente</h3></label>
                    <select class="form-control">
                        <option>Pupila Vertical</option>
                        <option>Pupila Redonda</option>
                        <option>Não Sei</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tamanhoSerp"><h3>Ela Esta Em um Lugar Cujo Afeta Sua Segurança?</h3></label>
                    <select class="form-control">
                        <option>Sim</option>
                        <option>Não</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary botaoSub2">Enviar</button>
            </form>



        </div>




<?php include "rodape.php"; ?>
