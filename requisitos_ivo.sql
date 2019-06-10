insert into usuario (nome_usuario,cpf_usuario,senha_usuario,email_usuario)
values ('rapaz1','122.234.523-10','12345','rapaz1@gmail.com'),
       ('rapaz2','123.234.523-10','12345','rapaz2@gmail.com'),
       ('rapaz3','124.234.523-10','12345','rapaz3@gmail.com'),
       ('rapaz4','125.234.523-10','12345','rapaz4@gmail.com');

select nome_usuario,cpf_usuario,email_usuario from usuario where cpf_usuario = '122.234.523-10';

update usuario set nome_usuario = 'rapazAlterado1' where cpf_usuario = '122.234.523-10';

Select senha as $senha, cpf as valor from usuario where email = $_SESSION['email'];

