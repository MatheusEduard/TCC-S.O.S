<?php
include 'cabecalho.php';
$email = $_POST['emailLogin'];
$senha = $_POST['senhaLogin'];

if($email == 'matheuseduardo8000@gmail.com' or $email == 'luisdasilvaguilherme5@gmail.com' && $senha == 'admin'){
    echo '<h1 class="msgBemVindo">Bem Vindo Adiministrador</h1>';
    $_SESSION['nome']='Adiministrador';
    $_SESSION['email'] = $_POST['emailLogin'];
    echo '<meta http-equiv="refresh" content="3;url=index.php">';
}elseif($email == 'user@gmail.com' && $senha == 'user'){
    echo '<h1 class="msgBemVindo">Bem Vindo Usuario</h1>';
    $_SESSION['nome']='Usuario';
    $_SESSION['email'] = $_POST['emailLogin'];
    echo '<meta http-equiv="refresh" content="3;url=index.php">';
}elseif($email == 'resgatador@gmail.com' && $senha == 'resgatador') {
    echo '<h1 class="msgBemVindo">Bem Vindo Resgatador</h1>';
    $_SESSION['nome'] = 'Resgatador';
    $_SESSION['email'] = $_POST['emailLogin'];
    echo '<meta http-equiv="refresh" content="3;url=index.php">';
}else{
   echo '<h1 class="nomeLogin">Login ou Senha Incorreta, Por Favor Efetue o Login Novamente</h1>'; 
   echo '<meta http-equiv="refresh" content="4;url=login.php">'; 
}
 include 'rodape.php';

